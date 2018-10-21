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
 * Class TzSekolikoNoteType
 * @package App\Sekoliko\Service\MetierManagerBundle\Form
 */

class TzSekolikoNoteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('tz_sekoliko_note_valeur', TextType::class, array(
            'label'    => "Note",
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
            'data_class' => 'App\Sekoliko\Service\MetierManagerBundle\Entity\TzSekolikoNote'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'Sekoliko_service_metiermanagerbundle_Note';
    }
}