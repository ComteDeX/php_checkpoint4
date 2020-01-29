<?php

namespace App\Form;

use App\Entity\Tarification;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TarificationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $options;
        $builder
            ->add('adult')
            ->add('kid')
            ->add('groupPrice')
            ->add('school')
            ->add('shows')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Tarification::class,
        ]);
    }
}
