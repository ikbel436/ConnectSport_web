<?php

namespace App\Form;

use App\Entity\Personne;
use Doctrine\DBAL\Types\DateType;
use Symfony\Component\DomCrawler\Field\TextareaFormField;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\FileType;
class PersonneType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('datenaissance')
            ->add('adresse')
            ->add('mail',EmailType::class)
            ->add('tel')
            ->add('role',ChoiceType::class, [
                'choices' => [
                    'admin' => 'admin',
                    'respo' => 'respo',
                    'fan' => 'fan',

                ]])
            ->add('mdp', PasswordType::class)
            ->add('nomequipe')
            ->add('etat',ChoiceType::class, [
        'choices' => [
            'active' => 'active',
            'desactive' => 'desactive',


        ]])
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
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Personne::class,
        ]);
    }
}
