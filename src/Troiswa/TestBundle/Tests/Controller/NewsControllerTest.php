<?php

namespace Troiswa\TestBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class NewsControllerTest extends WebTestCase
{
	public function __construct()
	{
		$this->client=static::createClient();
	}

	public function testIndex()
	{
		$crawler=$this->client->request('GET', '/');
		$titre=$crawler->filter('h2:contains("Liste des news")')->count();
		$this->assertGreaterThan(0, $titre);
		$news_list=$crawler->filter('div.news_list');
		$this->assertEquals(1,$news_list->count());
		$news=$crawler->filter('.news');
		$this->assertGreaterThan(0, $news->count(), 'Il n\'a pas de news dans la liste');
		return $crawler;
	}

	/**
     * @depends testIndex
     */
	public function testShow($crawler)
	{
		$news=$crawler->filter('.news')->eq(0);
		$old_title=$news->filter('h3')->eq(0)->text();
		$lien=$news->filter('a')->eq(0);
		$crawler=$this->client->click($lien->link());

		$commentaires=$crawler->filter('h3:contains("Commentaires")')->count();
		$this->assertEquals(1, $commentaires);

		$new_title=$crawler->filter('h2')->eq(0)->text();
		$this->assertEquals($old_title,$new_title);
		return $crawler;
	}

	/**
     * @depends testShow
     */
	public function testUserNews($crawler)
	{
		//vérification du lien de l'auteur
		$lien=$crawler->filter('.news_auteur a')->eq(0);
		$auteur=$lien->text();/*
		$link=explode("/", ($lien->attr('href')))[3];
		$this->assertEquals($auteur,$link);*/

		//redirection
		$crawler=$this->client->click($lien->link());

		//vérification de la bonne redirection vers la page d'auteur
		$user=$crawler->filter('h2')->eq(0)->text();
		$this->assertEquals($user,$auteur);

		//vérification de l'affichage des news
		$news_list=$crawler->filter('div.news_list');
		$this->assertEquals(1, $news_list->count());

		//vérification de la bonne appartenance des news
		$news=$crawler->filter('.news')->eq(0);
		$auteur=$news->filter('.news_auteur')->eq(1);
		$lien=$auteur->filter('a')->eq(0);
		$auteur=$lien->text();
		$this->assertEquals($user,$auteur);

		//vérification de l'affichage des commentaires
		$commentaires=$crawler->filter('div.commentaires_list');
		$this->assertEquals(1, $commentaires->count());

		//vérification de la bonne appartenance des commentaires
		$auteur=$crawler->filter('.comm_auteur')->eq(0);
		$auteur=$auteur->text();
		$this->assertEquals($user,$auteur);
	}

    public function testCreate()
    {
        $crawler = $this->client->request('GET', '/admin/news/create/');
    }

}