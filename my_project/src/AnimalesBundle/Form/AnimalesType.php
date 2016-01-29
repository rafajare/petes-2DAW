<?php

namespace AnimalesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnimalesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre','text',array('label'=>' '))
            ->add('tipo','text',array('label'=>' '))
            ->add('raza','text',array('label'=>' '))
            ->add('sexo','text',array('label'=>' '))
            ->add('nacimiento','date',array('label'=>' ','years'=>range(date('Y')-50,date('Y'))))
            ->add('propietario','text',array('label'=>' '))
            ->add('pedigri','checkbox',array('label'=>' '))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AnimalesBundle\Entity\Animales'
        ));
    }
}
