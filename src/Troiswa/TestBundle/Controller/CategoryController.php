<?php

namespace Troiswa\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Troiswa\TestBundle\Entity\News;
use Troiswa\TestBundle\Entity\Category;
use Troiswa\TestBundle\Form\CategoryType;
use Symfony\Component\HTTPFoundation\Request;

class CategoryController extends Controller
{

    /**
     *@Template()
     */
    public function listeAction()
    {
    	$repo=$this->getDoctrine()->getRepository('TroiswaTestBundle:Category');
    	$category_list=$repo->findBy(array());
    	return array('category_list' => $category_list);
    }

    /**
     *@Template()
     */
    public function getAction($id, Request $request)
    {
    	$repo=$this->getDoctrine()->getRepository('TroiswaTestBundle:Category');
    	$category=$repo->findOneBySlug($id);
        if(!$category){
            throw $this->createNotFoundException('La catégorie est introuvable');
        }
        return array('category' => $category);
    }

    /**
     *@Template()
     */
    public function createAction(Request $request)
    {
    	$category=new Category();
    	$builder=new CategoryType();
    	$form=$this->createForm($builder, $category, array(
    		'action'=>$this->generateUrl('troiswa_test_category_create'),
    		'method'=>'PUT'
    		))->add('valider', 'submit', array('label' => 'Créer'));
    	$form->handleRequest($request);
    	if ($form->isValid()){
    		$em=$this->getDoctrine()->getManager();
    		$em->persist($category);
    		$em->flush();
    		return $this->redirect($this->generateUrl('troiswa_test_category', array('id' => $category->getSlug())));
    	}
    	return array('form' => $form->createView());
    }

    /**
     *@Template()
     */
    public function updateAction($id, Request $request)
    {
    	$builder=new CategoryType();
        $repo=$this->getDoctrine()->getRepository('TroiswaTestBundle:Category');
        $category=$repo->find($id);
        if(!$category){
            throw $this->createNotFoundException('La catégorie est introuvable');  
        }
        $form=$this->createForm($builder, $category, array(
            'action'=>$this->generateUrl('troiswa_test_category_update', array('id' => $id)),
            'method'=> 'PUT'
            ))->add('valider', 'submit', array('label' => 'valider'));
        $form->handleRequest($request);
         if ($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            $this->get('session')->getFlashBag()->add('notice', 'La catégorie a été modifiée');
            return $this->redirect($this->generateUrl('troiswa_test_category', array('id' => $id)));
        }
        return array('form' => $form->createView());
    }

    /**
     *@Template()
     */
    public function deleteAction($id)
    {
    	$repo=$this->getDoctrine()->getRepository('TroiswaTestBundle:Category');
        $category=$repo->find($id);
        if(!$category){
            throw $this->createNotFoundException('La catégorie est introuvable');  
        }
        $repo_news=$this->getDoctrine()->getRepository('TroiswaTestBundle:News');
        $news=$repo_news->findByCategory($category);
        foreach ($news as $news_item) {
        	$news_item->setCategory();
        }
        $em=$this->getDoctrine()->getManager();
        $em->remove($category);
        $em->flush();
        $this->get('session')->getFlashBag()->add('notice', 'La catégorie a été supprimée');
        return $this->redirect($this->generateUrl('troiswa_test_categories'));
    }
}