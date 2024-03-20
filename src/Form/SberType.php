<?php

namespace App\Form;

use App\Entity\Sber;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Regex;


class SberType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('datum', null, [
                'widget' => 'choice',
            ])
            ->add('souradnice_sirka', TextType::class, [
                'required' => true, // Toto pole je povinné
                'attr' => [
                    'required' => 'required', // Přidání HTML atributu required
                ],])
            ->add('souradnice_delka', TextType::class, [
                'required' => true, // Toto pole je povinné
                'attr' => [
                    'required' => 'required', // Přidání HTML atributu required
                ],])
            ->add('nadmorska_vyska', NumberType::class, [
                'required' => true, // Toto pole je povinné
                'attr' => [
                    'required' => 'required', // Přidání HTML atributu required
                    'step' => 'any', // Zde povolíte pouze zadávání čísel
                ],
                'constraints' => [
                    new Regex([
                        'pattern' => '/^\d+(\.\d+)?$/', // Povolí pouze čísla a desetinná čísla
                        'message' => 'Pouze čísla jsou povoleny.', // Chybová zpráva při neplatném vstupu
                    ]),],])
            ->add('substrat', TextType::class)
            ->add('poznamka', TextareaType::class)
            ->add('save', SubmitType::class)
            ->add('reset', ResetType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Sber::class,
        ]);
    }
}
