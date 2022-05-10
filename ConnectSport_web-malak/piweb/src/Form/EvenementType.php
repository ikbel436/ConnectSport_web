<?php

namespace App\Form;

use App\Entity\Evenement;
use App\Entity\Personne;
use App\Entity\Sponsor;
use phpDocumentor\Reflection\Type;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
class EvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('lieu', ChoiceType::class,
                [
                    'choices'  =>
                        [
                            'Tunis' => 'Tunis',
                            'Ariana' => 'Ariana',
                            'Mahdia' => 'Mahdia',
                            'Sousse' => 'Sousse',
                            'Mannouba' => 'Mannouba',
                            'Bizete' => 'Bizete',
                            'Le Kef' => 'Le Kef',
                            'Monastir' => 'Monastir',
                            'Gafsa'=>'Gafsa',
                            'Gasrine'=>'Gasrine',
                            'Jendouba'=>'Jendouba',
                            'Medenine'=>'Medenine',
                            'Seliana'=>'Seliana'
                        ],


                ] )
            ->add('date')
            ->add('nbparticipation')
            ->add('description')
            ->add('prix')
            ->add('image',FileType::class,['data_class' => NULL, 'constraints' => [
                new File([
                    'maxSize' => '9000k',
                    'mimeTypes' => [
                        'image/jpeg',
                        'image/png',

                    ],
                    'mimeTypesMessage' => 'Please upload a valid image',
                ])
            ]])
            ->add('ids',EntityType::class, [
                'class'=>Sponsor::class,
                'choice_label'=>'nom',
                'multiple'=>false,
                'expanded'=>false,
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}
