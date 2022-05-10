<?php

namespace App\Form;

use App\Entity\Personne;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Doctrine\DBAL\Types\DateType;
// Import the Captcha Field Type and Validator
use Captcha\Bundle\CaptchaBundle\Form\Type\CaptchaType;
use Captcha\Bundle\CaptchaBundle\Validator\Constraints\ValidCaptcha;
class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('mail')
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
            ])
            ->add('mdp', PasswordType::class)
            ->add('nom')
            ->add('prenom')
            ->add('datenaissance')
            ->add('adresse')
            ->add('tel')
            ->add('role',ChoiceType::class, [
                'choices' => [
                    'respo' => 'respo',
                    'fan' => 'fan',

                ]])
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
            ->add('captchaCode', CaptchaType::class, array(
                'captchaConfig' => 'ExampleCaptchaUserRegistration',
                'constraints' => [
                    new ValidCaptcha([
                        'message' => 'Invalid captcha, please try again',
                    ]),
                ],
            ))
        ;

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Personne::class,
        ]);
    }
}
