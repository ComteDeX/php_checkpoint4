<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $options;
        $builder
            ->add('name', null, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Votre nom'
                ],
            ])
            ->add('email', EmailType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Votre e-mail'
                    ],
            ])
            ->add('object', null, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Objet'
                    ],
            ])
            ->add('message', TextareaType::class, [
                'label' => false,
                'attr' => [
                    'placeholder' => 'Votre message'
                    ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
