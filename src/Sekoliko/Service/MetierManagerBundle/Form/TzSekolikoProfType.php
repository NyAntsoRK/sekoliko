<?php

namespace App\Sekoliko\Service\MetierManagerBundle\Form;

use Doctrine\ORM\EntityRepository;
use Koff\Bundle\I18nFormBundle\Form\Type\TranslationsType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;


/**
 * Class TzSekolikoProfType
 * @package App\Sekoliko\Service\MetierManagerBundle\Form
 */
class TzSekolikoProfType extends AbstractType
{
     /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tz_sekoliko_prof_nom', TextType::class, array(
                'label'    => "Nom du Prof",
                'required' => true
            ))
            ->add('tz_sekoliko_prof_prenom', TextType::class, array(
                'label'    => "Prenom du Prof",
                'required' => true
            ))
            ->add('tz_sekoliko_prof_fonction', TextType::class, array(
                'label'    => "Fonction du Prof",
                'required' => true
            ))
            ->add('tz_sekoliko_prof_date_debut', DateTimeType::class, array(
                'label'  => "Date",
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy',
                'attr'   => array(
                    'class'         => 'kl-datetimepicker-simple',
                    'required'      => true,
                    'autocomplete'  => 'off'
                )
            ))
            ->add('tz_sekoliko_prof_contact', IntegerType::class, array(
                'label'    => "Contact du Prof",
                'required' => true
            ))
            ->add('tz_sekoliko_prof_date_fin', DateTimeType::class, array(
                'label'  => "Date fin du contrat",
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy',
                'attr'   => array(
                    'class'         => 'kl-datetimepicker-simple',
                    'required'      => true,
                    'autocomplete'  => 'off'
                )
            ))
            ->add('tz_sekoliko_prof_date_is_fin', IntegerType::class, array(
                'label'  => "Est Date fin du contrat",
                'required'      => true
            ))
            ->add('tz_sekoliko_prof_date_naissance', DateTimeType::class, array(
                'label'  => "Est Date fin du contrat",
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy',
                'attr'   => array(
                    'class'         => 'kl-datetimepicker-simple',
                    'required'      => true,
                    'autocomplete'  => 'off'
                )
            ))

            ;
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\Sekoliko\Service\MetierManagerBundle\Entity\SekolikoJourFerie'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'Type du prof';
    }
}