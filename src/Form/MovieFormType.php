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
                'attr' =>
                    [
                        'class' => 'form-control bg-transparent block border-w-2 w-full h-20 text-4xl',
                        'placeholder' => 'Enter title...'
                    ],
                    'label' => false,
                    'required' => false
            ])
            ->add('releaseYear', IntegerType::class, [
                'attr' =>
                    [
                        'class' => 'form-control mt-10 bg-transparent block border-w-2 w-full h-20 text-4xl',
                        'placeholder' => 'Enter Release Year'
                    ],
                    'label' => false,
                    'required' => false
            ])
            ->add('description', TextareaType::class, [
                'attr' =>
                    [
                        'class' => 'form-control bg-transparent block border-w-2 w-full h-60 text-4xl',
                        'placeholder' => 'Enter Description',
                        'rows' => '7'
                    ],
                    'label' => false,
                    'required' => false
            ])
            ->add('imagePath', FileType::class, [
                    'attr' =>
                        [
                            'class' => 'py-10',
                        ],
                    'label' => false,
                    'required' => false,
                    'mapped' => false,
                ]
            );
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Movie::class,
        ]);
    }
}
