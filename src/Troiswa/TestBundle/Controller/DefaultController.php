<?php

namespace Troiswa\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TroiswaTestBundle:Default:index.html.twig', array('name' => $name));
    }
    /**
     *@Template()
     */
    public function accueilAction()
    {
    	$objets=array();
    	foreach (range(0,9) as $i) {
    		$objets[]=array('id'=>$i, 'nom'=>'objet'.$i);
    	}
    	return array('objets'=>$objets);
    }

    /**
    *@template()
    */
    public function categories_sidebarAction()
    {
        $repo=$this->getDoctrine()->getRepository('TroiswaTestBundle:Category');
        $category_list=$repo->findAll();
        return array('category_list' => $category_list);
    }
}
