<?php

namespace Troiswa\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Troiswa\TestBundle\Entity\News;
use Troiswa\TestBundle\Entity\Commentaire;
use Troiswa\TestBundle\Entity\Category;
use Troiswa\TestBundle\Form\NewsType;
use Troiswa\TestBundle\Form\CommentairesType;
use Symfony\Component\HTTPFoundation\Request;

class NewsController extends Controller
{
	/**
     *@Template()
     */
    public function createAction(Request $request)
    {
    	$news=new News();
        $builder=new NewsType();
        $form=$this->createForm($builder, $news, array(
            'action'=>$this->generateUrl('troiswa_test_create'),
            'method'=> 'PUT'
            ))->add('valider', 'submit', array('label' => 'créer'));
        $user=$this->getUser();
        $news->setAuteur($user);
        $form->handleRequest($request);
        if ($form->isValid()){
            $news->setDate(new \Datetime());
            $em=$this->getDoctrine()->getManager();
            $em->persist($news);
            $em->flush();
            return $this->redirect($this->generateUrl('troiswa_test_news_get', array('id' => $news->getSlug())));
        }
        return array('form' => $form->createView());
    }

    /**
     *@Template()
     */
    public function listeAction()
    {
    	$repo=$this->getDoctrine()->getRepository('TroiswaTestBundle:News');
    	$news_list=$repo->findBy(array(), array('date' => 'DESC'));
    	return array('news_list' => $news_list);
    }

    /**
     *@Template()
     */
    public function getAction($id, Request $request)
    {
        $builder_com=new CommentairesType();
        $commentaire=new Commentaire();
        $user=$this->getUser();
        $commentaire->setAuteur($user);
        $repo=$this->getDoctrine()->getRepository('TroiswaTestBundle:News');
        $news=$repo->findOneBySlug($id);
        if(!$news){
            throw $this->createNotFoundException('La news est introuvable');
        }
        $form=null;
        $admin=$this->get('security.context')->isGranted('ROLE_ADMIN');
        $user=$this->get('security.context')->isGranted('ROLE_USER');
        if($admin || $user){
            $form=$this->createForm($builder_com, $commentaire, array(
                'action'=>$this->generateUrl('troiswa_test_news_get', array('id' => $news->getSlug())),
                'method'=> 'PUT'
                ))->add('valider', 'submit', array('label' => 'valider'));
            $form->handleRequest($request);
             if ($form->isValid()){
                $commentaire->setDate(new \Datetime())->setNews($news);
                $em=$this->getDoctrine()->getManager();
                $em->persist($commentaire);
                $em->flush();
                $this->get('session')->getFlashBag()->add('notice', 'Le commentaire a été crée');
            }
            $form=$form->createView();
        }
        return array('news' => $news, 'form' => $form);
    }

    /**
     *@Template()
     */
    public function updateAction($id, Request $request)
    {
        $builder=new NewsType();
        $repo=$this->getDoctrine()->getRepository('TroiswaTestBundle:News');
        $news=$repo->find($id);
        if(!$news){
            throw $this->createNotFoundException('La news est introuvable');  
        }
        $form=$this->createForm($builder, $news, array(
            'action'=>$this->generateUrl('troiswa_test_news_update', array('id' => $id)),
            'method'=> 'PUT'
            ))->add('valider', 'submit', array('label' => 'valider'));
        $form->handleRequest($request);
         if ($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            $this->get('session')->getFlashBag()->add('notice', 'La news a été modifiée');
            return $this->redirect($this->generateUrl('troiswa_test_news_get', array('id' => $id)));
        }
        return array('form' => $form->createView());
    }

    public function deleteAction($id)
    {
        $repo=$this->getDoctrine()->getRepository('TroiswaTestBundle:News');
        $news=$repo->find($id);
        if(!$news){
            throw $this->createNotFoundException('La news est introuvable');
        }
        $em=$this->getDoctrine()->getManager();
        $commentaires=$news->getCommentaires();
        foreach($commentaires as $commentaire){
            $em->remove($commentaire);
            $em->flush();
        }
        $em->remove($news);
        $em->flush();
        $this->get('session')->getFlashBag()->add('notice', 'La news a été supprimée');
        return $this->redirect($this->generateUrl('troiswa_test_news_liste'));
    }

    /**
     *@Template()
     */
    public function usernewsAction(Request $request, $username)
    {
        $repo=$this->getDoctrine()->getRepository('TroiswaTestBundle:User');
        $user=$repo->findOneByUsername($username);
        if(!$user){
            throw $this->createNotFoundException('L\'utilisateur est introuvable ou n\'existe pas');
        }
        return array('user'=>$user);
    }
}
