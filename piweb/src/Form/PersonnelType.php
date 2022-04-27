<?php

namespace App\Form;

use App\Entity\Personne;
use App\Entity\Personnel;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class PersonnelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('cin')
            ->add('nom')
            ->add('prenom')
            ->add('datenaissance')
            ->add('adresse')
            ->add('mail')
            ->add('tel')
            ->add('salaire')
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
            ->add('sport',ChoiceType::class, [
        'choices' => [
            'football' => 'football',
            'basketball' => 'basketball',
            'handball' => 'handball',
        ]])
            ->add('categorie',ChoiceType::class, [
                'choices' => [
                    'cadet' => 'cadet',
                    'junior' => 'junior',
                    'senior' => 'senior',
                    'espoir' =>'espoir' ,
                ]])
            ->add('role',ChoiceType::class, [
                'choices' => [
                    'joueur' => 'joueur',
                    'entraineur' =>'entraineur',
                    'staff' => 'staff' ,]])
            ->add('idrespo',EntityType::class,[
            'class'=>Personne::class,
                'choice_label'=>'nom',
                'multiple'=>false,
                'expanded'=>false,

            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Personnel::class,
        ]);
    }

}
