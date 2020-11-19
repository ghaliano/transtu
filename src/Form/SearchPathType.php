<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType ;
use Symfony\Component\Form\Extension\Core\Type\SubmitType ;
use App\Entity\Station ;

class SearchPathType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('start_station', EntityType::class , [ 'class' => Station::class ])
            ->add('end_station', EntityType::class , [ 'class' => Station::class ])
            ->add('submit', SubmitType::class) 
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }

    
    public function getBlockPrefix()
    {
       return "" ;
    }
}
