<?php

namespace Xiaomei\XiaomeiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegisterType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username')
            ->add('email')
            ->add('password', 'repeated', array(
                'type' => 'password',
                'invalid_message' => 'les mots de pass doivent correspondant.',
                'options' => array('attr' => array('class' => 'password-field')),
                'required' => true,
                'first_options'  => array('label' => 'mot de pass'),
                'second_options' => array('label' => 'mot de passe confirmer'),
            ))
            ->add('name')
            ->add('firstname')

            
            ->add('birthyear','datetime',array(
                    "label" => "annee de naisance", 
                    'widget' => 'single_text',
                    'input' => 'datetime',
                    'format' => 'yyyy'
                ))
            ->add('sex','choice', array(
             'choices' => array('m' => 'Male', 'f' => 'Female')))            
            ->add('metier','text')
            ->add('descriptifFormateur')
            ->add('descriptifEtudiant')
           // ->add('photo')
            ->add('file', 'file')        

            // ->add( 'cours','entity',array(
            //     "class"=>"XiaomeiXiaomeiBundle:Cours",
            //     "property"=>"id"
            //     //"query-builder"=>
            //     ))  

            ->add('Inscription','submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Xiaomei\XiaomeiBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'xiaomei_xiaomeibundle_register';
    }
}
