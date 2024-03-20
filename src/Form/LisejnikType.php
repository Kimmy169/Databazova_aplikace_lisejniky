<?php

namespace App\Form;

use App\Entity\Lisejnik;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class LisejnikType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('cesky_nazev')
            ->add('vedecky_nazev', TextType::class, [
                'required' => true, // Toto pole je povinné
                'attr' => [
                    'required' => 'required', // Přidání HTML atributu required
                ],])
            ->add('trida', TextType::class, [
                'required' => true, // Toto pole je povinné
                'attr' => [
                    'required' => 'required', // Přidání HTML atributu required
                ],])
            ->add('rod', TextType::class, [
                'required' => true, // Toto pole je povinné
                'attr' => [
                    'required' => 'required', // Přidání HTML atributu required
                ],])
            ->add('celed', TextType::class, [
                'required' => true, // Toto pole je povinné
                'attr' => [
                    'required' => 'required', // Přidání HTML atributu required
                ],])
            ->add('typ_substratu', ChoiceType::class,[
                'label' => 'Nejčastější substrát: ', 
                'choices' =>[
                'terikolní' =>'terikolni',
                'saxikolní' => 'saxikolni',
                'epifitický' =>'epifiticky',
                'lignikolní' =>'lignikolni'
            ]])
            ->add('ohrozeni', ChoiceType::class,[
                'label'=> 'Stupeň ohrožení: ',
                'choices' => [
                    '- ' =>'-',
                    'RE - regionálně vyhynulé' => 'RE',
                    'CR - kriticky ohrožené' => 'CR',
                    'EN - ohrožené' => 'EN',
                    'VU - zranitelné' => 'VU',
                    'DD - nedostatečně známé' => 'DD',
                    'NT - blízké ohrožení' => 'NT',
                    'LC - neohrožené' => 'LC'
                ]])
            ->add('poznamky', TextareaType::class)
            ->add('save', SubmitType::class)
            ->add('reset', ResetType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Lisejnik::class,
        ]);
    }
}
