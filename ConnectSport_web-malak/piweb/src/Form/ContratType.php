<?php

namespace App\Form;

use App\Entity\Contrat;
use App\Entity\Personne;
use App\Entity\Personnel;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
// Import the Captcha Field Type and Validator
use Captcha\Bundle\CaptchaBundle\Form\Type\CaptchaType;
use Captcha\Bundle\CaptchaBundle\Validator\Constraints\ValidCaptcha;

class ContratType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('datecontrat')
            ->add('type',ChoiceType::class, [
                'choices' => [
                    'professionnel' => 'professionnel',
                    'debutant' => 'debutant',
                    'jeune' => 'jeune',

                ]])
            ->add('idp',EntityType::class,[
                'class'=>Personnel::class,
                'choice_label'=>'nom',
                'multiple'=>false,
                'expanded'=>false,])


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
            'data_class' => Contrat::class,
        ]);
    }
}
