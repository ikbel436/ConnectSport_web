<?php

namespace App\Form;

use App\Entity\Commande;
use App\Entity\Magasin;
use App\Entity\Personne;
use App\Entity\Produit;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomP')
            ->add('prix')
            ->add('categorie',ChoiceType::class, [
                'choices' => [
                    'Football' => 1,
                    'Basketball' => 2,
                    'Handball' => 3,
                ]])
                ->add('image',FileType::class,[
                    'mapped' => false,
                   'label' => 'Telecharger une image ' ])
            ->add('idm',EntityType::class,[
                'class'=>Magasin::class,
                'choice_label'=>'nom',
                'multiple'=>false,
                'expanded'=>false,

            ]
)






        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
