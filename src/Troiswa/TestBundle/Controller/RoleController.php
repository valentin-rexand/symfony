<?php

namespace Troiswa\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Troiswa\TestBundle\Entity\Role;
use Troiswa\TestBundle\Form\RoleType;
use Symfony\Component\HTTPFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;

class RoleController extends Controller
{
    /**
     *@Template()
     */
    public function listeAction()
    {
        $repo=$this->getDoctrine()->getRepository('TroiswaTestBundle:Role');
        $role=$repo->findBy(array());
        return array('role' => $role);
    }

    /**
     *@Template()
     */
    public function createAction(Request $request)
    {
        $role=new role();
        $builder=new roleType();
        $form=$this->createForm($builder, $role, array(
            'action'=>$this->generateUrl('troiswa_test_role_create'),
            'method'=> 'PUT'
            ))->add('creer', 'submit', array('label' => 'créer'));
        $form->handleRequest($request);
        if ($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($role);
            $em->flush();
            $this->get('session')->getFlashBag()->add('notice', 'Le role a été crée');
            return $this->redirect($this->generateUrl('troiswa_test_news_liste'));
        }
        return array('form' => $form->createView());
    }

    /**
     *@Template()
     */
    public function updateAction($id, Request $request)
    {
        $builder=new roleType();
        $repo=$this->getDoctrine()->getRepository('TroiswaTestBundle:Role');
        $role=$repo->find($id);
        if(!$role){
            throw $this->createNotFoundException('Le role est introuvable');  
        }
        $form=$this->createForm($builder, $role, array(
            'action'=>$this->generateUrl('troiswa_test_role_update', array('id' => $id)),
            'method'=> 'PUT'
            ))->add('valider', 'submit', array('label' => 'valider'));
        $form->handleRequest($request);
         if ($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            $this->get('session')->getFlashBag()->add('notice', 'Le role a été modifiée');
            return $this->redirect($this->generateUrl('troiswa_test_news_liste'));
        }
        return array('form' => $form->createView());
    }

    /**
     *@Template()
     */
    public function deleteAction($id)
    {
        $repo=$this->getDoctrine()->getRepository('TroiswaTestBundle:Role');
        $role=$repo->find($id);
        if(!$role){
            throw $this->createNotFoundException('Le role est introuvable');
        }
        $em=$this->getDoctrine()->getManager();
        $em->remove($role);
        $em->flush();
        $this->get('session')->getFlashBag()->add('notice', 'Le role a été supprimé');
        return $this->redirect($this->generateUrl('troiswa_test_news_liste'));
    }
}