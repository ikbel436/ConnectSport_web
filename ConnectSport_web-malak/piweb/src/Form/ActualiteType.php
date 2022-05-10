<?php

namespace App\Form;

use App\Entity\Actualite;
use App\Entity\Personne;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Doctrine\DBAL\Types\DateTimeType;

class ActualiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            ->add('description')
           // ->add('dateajout')
        //   ->add('dateajout', DateType::class,[ 'placeholder' => [
          //     'year' => 'Year', 'month' => 'Month', 'day' => 'Day',]])
          // ->add('dateajout', DateType::class,[ 'placeholder' => [
            //  'year' => 'Year', 'month' => 'Month', 'day' => 'Day',]])
           //->add('image',TextareaType::class)
            ->add('image',FileType::class,[
               // 'mapped' => false,
                'label' => 'Telecharger une image ' ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Actualite::class,
        ]);
    }
}
