<?php

namespace Troiswa\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Troiswa\TestBundle\Entity\Password;
use Troiswa\TestBundle\Entity\User;
use Troiswa\TestBundle\Form\PasswordType;;
use Symfony\Component\HTTPFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;

class PasswordController extends Controller
{
    /**
     *@Template()
     */
    public function passwordAction(Request $request, $id)
    {
        $repo=$this->getDoctrine()->getRepository('TroiswaTestBundle:User');
        $user=$repo->find($id);
        if(!$user){
            throw $this->createNotFoundException('L\'utilisateur est introuvable');  
        }
        $change_password=new Password();
        $password_type=new PasswordType();
        $form=$this->createForm($password_type, $change_password, array(
            'action'=>$this->generateUrl('troiswa_test_password', array('id' => $id)),
            'method'=> 'PUT'
            ))->add('valider', 'submit', array('label' => 'valider'));
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $factory=$this->get('security.encoder_factory');
            $encoder=$factory->getEncoder($user);
            $password=$encoder->encodePassword($user->getPassword(),$user->getSalt());
            $user->setPassword($password);
            $em=$this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $this->get('session')->getFlashBag()->add('notice', 'Le mot de passe a été modifié');
            return $this->redirect($this->generateUrl('troiswa_test_news_liste'));
        }
        return array('form'=>$form->createView());
    }
}