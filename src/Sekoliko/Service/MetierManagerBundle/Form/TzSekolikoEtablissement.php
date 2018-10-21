<?php
/**
 * Jul
 */
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
 * Class SekolikoJourFerieType
 * @package App\Sekoliko\Service\MetierManagerBundle\Form
 */
class TzSekolikoEtablissement extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tzSekolikoNom', TextType::class, array(
                'label'    => "Nom de l'etablissement",
                'required' => true
            ))
            ->add('tzSekolikoPhone', TextType::class, array(
                'label'    => "Téléphone de l'etablissement",
                'required' => true
            ))
            ->add('tzSekolikoAdresse', TextType::class, array(
                'label'    => "Adresse de l'etablissement",
                'required' => true
            ))
            ->add('tzSekolikoMail', TextType::class, array(
                'label'    => "Mail de l'etablissement",
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
            'data_class' => 'App\Sekoliko\Service\MetierManagerBundle\Entity\TzSekolikoEtablissement'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'Sekoliko_service_metiermanagerbundle_etablissement';
    }
}
