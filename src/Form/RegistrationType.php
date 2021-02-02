<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\TypeUtilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username')
            ->add('Prenom')
            ->add('Sexe', ChoiceType::class,[
                'choices' => [
                    'Masculin' => 'Masculin',
                    'Féminin' => 'Féminin'                    
                ]                
            ])
            ->add('Email')
            ->add('password',PasswordType::class)
            ->add('Confirm_mdp',PasswordType::class)
            ->add('TypeUtilisateur', EntityType::class,[
                'class'=>TypeUtilisateur::class,
                'choice_label'=>'Nom'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
