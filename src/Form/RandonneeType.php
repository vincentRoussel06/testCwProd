<?php

namespace App\Form;

use App\Entity\Randonnee;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RandonneeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Createur')
            ->add('Titre')
            ->add('Duree')
            ->add('Distance')
            ->add('Denivele')
            ->add('PointHaut')
            ->add('PointBas')
            ->add('Difficulte')
            ->add('RetourDepart')
            ->add('Type')
            ->add('Region')
            ->add('Commune')
            ->add('Depart')
            ->add('Description')
            ->add('Photo')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Randonnee::class,
        ]);
    }
}
