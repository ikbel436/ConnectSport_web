<?php

namespace App\Form;

use App\Entity\Personne;
use App\Entity\Sponsor;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class SponsorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('datenaissance')
            ->add('adresse')
            ->add('tel')
            ->add('mail')
           // ->add('idp',EntityType::class, [
        //'class'=>Personne::class,
        //'choice_label'=>'nom',
        //'multiple'=>false,
        //'expanded'=>false,
         //   ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Sponsor::class,
        ]);
    }
}
