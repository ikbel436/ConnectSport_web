<?php

namespace App\Form;

use App\Entity\Magasin;
use App\Entity\Personne;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


//use Captcha\Bundle\CaptchaBundle\Form\Type\CaptchaType;
//use Captcha\Bundle\CaptchaBundle\Validator\Constraints\ValidCaptcha;

class MagasinType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('adresse')
            ->add('nombrebloc')

           // ->add('captchaCode', CaptchaType::class, array(
             //'captchaConfig' => 'ExampleCaptchaUserRegistration',
             // 'constraints' => [
          //  new ValidCaptcha([
            //    'message' => 'Invalid captcha, please try again',
          //  ]),
      //  ],
   // ))

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Magasin::class,
        ]);
    }

}
