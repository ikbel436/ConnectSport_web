<?php

namespace App\Form;

use App\Entity\Categorie;
use App\Entity\Personne;
use App\Entity\Reclamation;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReclamationfanType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            ->add('description')


          ->add('etat', ChoiceType::class, [
                'choices' => [
                   'Non Traitée'=>'Non Traitée',

                ]])

            ->add('numCommande')
            ->add('idCat',EntityType::class,[
                'class'=>Categorie::class,
                'choice_label'=>'nom',
                'multiple'=>false,
                'expanded'=>false,

            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
