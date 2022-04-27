<?php

namespace App\Form;

use App\Entity\Commande;
use App\Entity\Personne;
use App\Entity\Produit;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date')
            ->add('adresse')
            ->add('prix')
            ->add('idpers',EntityType::class,[
                'class'=>Personne::class,
                'choice_label'=>'nom',
                'multiple'=>false,
                'expanded'=>false,])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commande::class,
        ]);
    }

}
