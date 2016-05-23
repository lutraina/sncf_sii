<?php

namespace MyLabelBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LabelsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomProjet')
            ->add('lienProjet')
            ->add('versionProjet')
            ->add('labelProjet')
            ->add('annee1Label', 'date')
            ->add('annee2Label', 'date')
            ->add('annee3Label', 'date')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MyLabelBundle\Entity\Labels'
        ));
    }
}
