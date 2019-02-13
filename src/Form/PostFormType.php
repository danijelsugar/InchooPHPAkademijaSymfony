<?php


namespace App\Form;


use App\Entity\Post;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('content', TextareaType::class, [
                'label' => 'What\'s on your mind?'
            ])
            ->add('name', TextType::class , [
                'label' => 'Tag',
                'required' => false
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Add tag',
            ])
            ->add('saveAndAdd', SubmitType::class, [
                'label' => 'Add all'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
           'data_class' => Post::class
        ]);
    }


}