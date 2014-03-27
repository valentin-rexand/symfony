<?php

namespace Troiswa\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Troiswa\TestBundle\Entity\User;
use Troiswa\TestBundle\Form\UserType;
use Troiswa\TestBundle\Form\AdminUserType;
use Symfony\Component\HTTPFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;

class UserController extends Controller
{
    /**
     *@Template()
     */
    public function inscriptAction(Request $request)
    {
        $user=new User();
        $builder=new UserType();
        $form=$this->createForm($builder, $user, array(
            'action'=>$this->generateUrl('troiswa_test_user_inscript'),
            'method'=> 'PUT'
            ))->add('valider', 'submit', array('label' => 'valider'));
        $repo=$this->getDoctrine()->getRepository('TroiswaTestBundle:Role');
        $role=$repo->findOneByRole('ROLE_USER');
        $user->addRole($role);
        $form->handleRequest($request);
        if ($form->isValid()){
            $factory=$this->get('security.encoder_factory');
            $encoder=$factory->getEncoder($user);
            $password=$encoder->encodePassword($user->getPassword(),$user->getSalt());
            $user->setPassword($password);
            $em=$this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $this->get('session')->getFlashBag()->add('notice', 'Le compte a été crée');
            return $this->redirect($this->generateUrl('troiswa_test_news_liste'));
        }
        return array('form' => $form->createView());
    }

    /**
     *@Template()
     */
    public function loginAction()
    {
        $form=$this->createFormBuilder()
                        ->setAction($this->generateUrl('troiswa_test_user_login_check'))
                        ->setMethod('POST')
                        ->add('_username', 'text', array('label'=>'Nom d\'utilisateur'))
                        ->add('_password', 'password', array('label'=>'Mot de passe'))
                        ->add('submit', 'submit', array('label' => 'connexion'))
                        ->getForm();
        $request=$this->getRequest();
        $session=$request->getSession();
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                SecurityContext::AUTHENTICATION_ERROR
            );
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }
        return array('form' => $form->createView(),
                // last username entered by the user
                'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                'error'         => $error,
        );
    }

    /**
     *@Template()
     */
    public function get_userAction()
    {   
        $user=$this->getUser();
        return array('user' => $user);
    }

    /**
     *@Template()
     */
    public function updateAction($id, Request $request)
    {
        $repo=$this->getDoctrine()->getRepository('TroiswaTestBundle:User');
        $user=$repo->find($id);
        if(!$user){
            throw $this->createNotFoundException('L\'utilisateur est introuvable');  
        }
        $builder=new AdminUserType();
        $form=$this->createForm($builder, $user, array(
            'action'=>$this->generateUrl('troiswa_test_user_update', array('id' => $id)),
            'method'=> 'PUT'
            ))->add('valider', 'submit', array('label' => 'valider'));
        $form->handleRequest($request);
        if ($form->isValid()){
            $factory=$this->get('security.encoder_factory');
            $encoder=$factory->getEncoder($user);
            $password=$encoder->encodePassword($user->getPassword(),$user->getSalt());
            $user->setPassword($password);
            $em=$this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $this->get('session')->getFlashBag()->add('notice', 'L\'utilisateur a été modifié');
            return $this->redirect($this->generateUrl('troiswa_test_news_liste'));
        }
        return array('form' => $form->createView());
    }

    /**
     *@Template()
     */
    public function listeAction()
    {
        $repo=$this->getDoctrine()->getRepository('TroiswaTestBundle:User');
        $users=$repo->findBy(array());
        return array('users' => $users);
    }

    /**
     *@Template()
     */
    public function deleteAction($id)
    {
        $repo=$this->getDoctrine()->getRepository('TroiswaTestBundle:User');
        $user=$repo->find($id);
        if(!$user){
            throw $this->createNotFoundException('L\'utilisateur est introuvable');
        }
        $em=$this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();
        $this->get('session')->getFlashBag()->add('notice', 'L\'utilisateur a été supprimée');
        return $this->redirect($this->generateUrl('troiswa_test_news_liste'));
    }

    /**
     *@Template()
     */
    public function getAction()
    {
        $user=$this->getUser();
        return array('user' => $user);
    }
}