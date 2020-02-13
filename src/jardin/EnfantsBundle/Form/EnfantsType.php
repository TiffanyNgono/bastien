<?php

namespace jardin\EnfantsBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EnfantsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')->add('prenom')->add('sexe')->add('lieuNaissance')->add('dateNaissance')->add('medecin')->add('medecinNumero')->add('id_classe',EntityType::class, array('class' => 'classeBundle:Classe', 'choice_label' => 'niveau', 'multiple' => false) );
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'jardin\EnfantsBundle\Entity\Enfants'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'jardin_enfantsbundle_enfants';
    }


}
