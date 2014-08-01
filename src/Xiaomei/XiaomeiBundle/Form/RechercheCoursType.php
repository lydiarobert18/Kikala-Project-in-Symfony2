<?php

namespace Xiaomei\XiaomeiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RechercheCoursType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            
            ->add('lieu',null, array(
                'required'=>false,
                'label' => false,
                "attr" => array(

                        "placeholder" => "lieu")
                       ))
               
            ->add('duration',null, array(
                'required'=>false,
                'label' => false,
                "attr" => array(

                        "placeholder" => "max duration")
                       ))
            ->add( 'category','entity',array(
                 'label' => false,
                "class"=>"XiaomeiXiaomeiBundle:Category",
                "property"=>"name",
                "attr" => array(

                        "placeholder" => "category")
                              ))  
            ->add('Rechercher!','submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Xiaomei\XiaomeiBundle\Entity\Cours',
            'validation_groups' => array('search')
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'xiaomei_xiaomeibundle_recherchecours';
    }
}
