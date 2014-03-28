<?php

namespace Troiswa\TestBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PasswordType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('newPassword', 'repeated', array(
                'type'=>'password',
                'invalid_message'=>'Le password doit être identique',
                'required'=>true,
                'first_options'=>array('label'=>'Password'),
                'second_options'=>array('label'=>'Repeat Password')
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Troiswa\TestBundle\Entity\Password'
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