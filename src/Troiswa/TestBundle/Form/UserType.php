<?php

namespace Troiswa\TestBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('username')
            ->add('password', 'repeated', array('type'=>'password', 'invalid_message'=>'Les mot de passe doivent être identiques', 'required'=>true, 'first_options'=>array('label'=>'Mot de passe'), 'second_options'=>array('label'=>'Mot de passe (répétez)')))
            ->add('mail')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Troiswa\TestBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'troiswa_testbundle_news';
    }
}