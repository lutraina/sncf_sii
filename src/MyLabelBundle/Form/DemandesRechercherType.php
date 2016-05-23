<?php

namespace MyLabelBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;


class DemandesRechercherType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('matricule',     TextType::class,     array('label' => 'Matricule', 
                                                              'max_length' => 9))
            ->add('id',     	   NumberType::class,   array('label' => 'Numéro de la demande'))
        ;
    }
    
    public function getName()
    {
        return 'myylabelbundle_demandesrechercher';
    }
    
}
