<?php

namespace App\Form;

use App\Entity\Meal;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MealType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, ['label' => 'form.Name'])
            ->add('Description', TextareaType::class, ['label' => 'form.Description'])
            ->add('created_by', TextType::class, ['label' => 'form.Your.name'])
            ->add('category', ChoiceType::class, [
                'choices'=>[
                    'Sandwiches' => 'Sandwiches',
                    'Salades' => 'Salades',
                    'Tapas' => 'Tapas',
                    'Soupes' => 'Soupes',
                    'Pokey Ball' => 'Pokey Ball',
                ],
                'label' => 'form.Category'
            ],
            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
            $resolver->setDefaults([
            'data_class' => Meal::class,
        ]);
    }
}
