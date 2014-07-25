<?php

namespace Xiaomei\XiaomeiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ModifierType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username')    
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
            ->add('metier')
            ->add('descriptifFormateur')
            ->add('descriptifEtudiant')
            
            ->add('file', 'file',array(
                    "label" => "Modifer votre photo"))        
  

         

            ->add('Modifier','submit')
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
        return 'xiaomei_xiaomeibundle_modifierprofil';
    }
}
