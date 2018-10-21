<?php

namespace App\Sekoliko\Service\MetierManagerBundle\Form;

use Doctrine\ORM\EntityRepository;
use Koff\Bundle\I18nFormBundle\Form\Type\TranslationsType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

/**
 * Class TzSekolikoSessionType
 * @package App\Sekoliko\Service\MetierManagerBundle\Form
 */

class TzSekolikoSessionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('tz_sekoliko_session_debut', TextType::class, array(
            'label'    => "Debut de session",
            'required' => true
        ))
        ->add('tz_sekoliko_session_fin', TextType::class, array(
            'label'    => "Fin de session",
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
            'data_class' => 'App\Sekoliko\Service\MetierManagerBundle\Entity\TzSekolikoSession'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'Sekoliko_service_metiermanagerbundle_Session';
    }
}