<?php

namespace App\Form;

use App\Entity\Produit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Nom')
            // ->add('Prix')
            // ->add('Date_Limite')
            // ->add('Taux_Sucre')
            // ->add('Taux_Sel')
            // ->add('Taux_Proteine')
            // ->add('Taux_Fibre')
            // ->add('Taux_Energie')
            // ->add('Taux_Gras')
            // ->add('Taux_Additif')
            // ->add('marque')
            // ->add('taux_calcium')
            // ->add('taux_sodium')
            // ->add('nutriscore_grade')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
