<?php

namespace MyLabelBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class DemandesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',           TextType::class,      array('label' => 'Nom', 
			                                                   'max_length' => 30))
            ->add('prenom',        TextType::class,      array('label' => 'Prénom', 
			                                                   'max_length' => 30))
            ->add('matricule',     TextType::class,      array('label' => 'Matricule', 
			                                                   'max_length' => 9))
            ->add('mail',          EmailType::class,     array('label' => 'Adresse mail', 
			                                                   'max_length' => 30))
            ->add('nomProjet',     TextType::class,      array('label' => 'Nom du projet concerné', 
			                                                   'max_length' => 50))
            ->add('descProjet',    TextareaType::class,  array('label' => 'Description du projet', 
			                                                   'max_length' => 1500))
            ->add('caracProjet',   TextareaType::class,  array('label' => 'Caractéristiques du projet', 
			                                                   'max_length' => 1500, 
			                                                   'required' => false))
            ->add('dateMEP',       DateType::class,      array('label' => 'Date prévue de mise en production', 
			                                                   'widget' => 'single_text', 
															   'format' => 'dd/MM/yyyy', 
															   'attr' => array('class' => 'datepicker')))
            ->add('labelDmd',      ChoiceType::class,    array('label' => 'Niveau de label souhaité', 
			                                                   'choices' => array('Star 1' => 1, 'Star 2' => 2, 'Star 3' => 3), 
															   'choices_as_values' => true, 
															   'expanded' => true, 
															   'multiple' => false,
															   'attr' => array('class' => 'imgradio')))
            ->add('dateLabel',     DateType::class,      array('label' => 'Date (souhaitée) d\'obtention du Label',
			                                                   'widget' => 'single_text', 
															   'format' => 'dd/MM/yyyy', 
															   'attr' => array('class' => 'datepicker'), 
															   'required' => false))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MyLabelBundle\Entity\Demandes'
        ));
    }
}
