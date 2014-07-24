<?php

namespace Xiaomei\XiaomeiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CoursType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('image',null,array(
                    "required" => false))
            
            ->add('dateCours', "datetime", array(
                    "label" => "Date de formation", 
                    'widget' => 'single_text',
                    'input' => 'datetime',
                    'format' => 'MM/dd/yyyy'
                ))


            ->add('lieu')
            ->add('duration')
            ->add('descriptif','textarea',array(
                    "required" => false,
                    "label" => "descriptif",
                    'label_attr' => array(
                        'class' => 'MYCLASSFOR_LABEL'
                    ),
                    "attr" => array(
                        "class" => "yo",
                        "placeholder" => "descriptif")))

            ->add('nrPlaceTotal')
           
            ->add( 'category','entity',array(
                "class"=>"XiaomeiXiaomeiBundle:Category",
                "property"=>"name"
                //"query-builder"=>
                ))  
            ->add('Create!','submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Xiaomei\XiaomeiBundle\Entity\Cours'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'xiaomei_xiaomeibundle_cours';
    }
}
