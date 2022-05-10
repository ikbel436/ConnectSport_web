<?php

namespace App\Form;

use App\Entity\Evenement;
use App\Entity\Personne;
use App\Entity\Reservation;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
// Import the Captcha Field Type and Validator
use Captcha\Bundle\CaptchaBundle\Form\Type\CaptchaType;
use Captcha\Bundle\CaptchaBundle\Validator\Constraints\ValidCaptcha;
class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('age')
          /*  ->add('idr',EntityType::class, [
                'class'=>Evenement::class,
                'choice_label'=>'nom',
                'multiple'=>false,
                'expanded'=>false,
            ])*/
            //->add('idf',EntityType::class, [
              //  'class'=>Personne::class,
               // 'choice_label'=>'nom',
                //'multiple'=>false,
                //'expanded'=>false,
            //])
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
            'data_class' => Reservation::class,
        ]);
    }
}
