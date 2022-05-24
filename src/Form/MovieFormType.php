<?php

namespace App\Form;

use App\Entity\Movie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MovieFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Enter title...'
                ),
                'label' => false,

            ])
            ->add('releaseYear', IntegerType::class, [
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Enter Release Year'
                ),
                'label' => false,
            ])
            ->add('description', TextareaType::class, [
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Enter Description',
                    'rows' => '7'
                ),
                'label' => false,
            ])
            ->add('imagePath', FileType::class, [
                'required' => false,
                'mapped' => false,
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Movie::class,
        ]);
    }
}
