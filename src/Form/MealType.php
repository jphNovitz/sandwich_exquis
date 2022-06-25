<?php

namespace App\Form;

use App\Entity\Meal;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MealType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class)
            ->add('Description', TextType::class)
            ->add('created_by', TextType::class)
            ->add('updated_by', TextType::class)
            ->add('category', ChoiceType::class, [
                'choices'=>[
                    'Sandwiches' => 'Sandwiches',
                    'Salades' => 'Salades',
                    'Tapas' => 'Tapas',
                    'Soupes' => 'Soupes',
                    'Pokey Ball' => 'Pokey Ball',
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $this->setWidgets(array(
            'name'  => new sfWidgetFormInputText(),
        ));
            $resolver->setDefaults([
            'data_class' => Meal::class,
        ]);
    }
}
