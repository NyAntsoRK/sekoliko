<?php

namespace App\Sekoliko\Service\MetierManagerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Class TzSekolikoEtudiantType
 * @package App\Sekoliko\Service\MetierManagerBundle\Form
 */
class TzSekolikoEtudiantType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tzSekolikoEtudiantContact', TextType::class, array(
                'label'    => "Contact",
                'required' => true
            ))
            ->add('tzSekolikoEtudiantDateNaissance', DateTime::class, array(
                'label'    => "Date de naissance",
                'required' => true
            ))
            ->add('tzSekolikoEtudiantPrenom', TextType::class, array(
                'label'    => "Prenom",
                'required' => false
            ))
            ->add('tzSekolikoEtudiantSexe', TextType::class, array(
                'label'    => "Sexe",
                'required' => true
            ))
            ->add('tzSekolikoEtudiantNom', TextType::class, array(
                'label'    => "Nom",
                'required' => true
            ))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\Sekoliko\Service\MetierManagerBundle\Entity\TzSekolikoEtudiant'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'Sekoliko_service_metiermanagerbundle_role';
    }
}
