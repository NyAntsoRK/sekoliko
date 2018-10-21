<?php
/**
 * Created by PhpStorm.
 * User: nyantso
 * Date: 21/10/18
 * Time: 04:54
 */

namespace App\Sekoliko\Service\MetierManagerBundle\Form;
use Doctrine\DBAL\Types\DateTimeType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


/**
 * Class SekolikoPersonnelType
 * @package App\Sekoliko\Service\MetierManagerBundle\Form
 */
class SekolikoPersonnelType extends AbstractType{

    /**
     * {@inheritdoc}
     */

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('TzSekolikoPersoNom', TextType::class, array(
                'label'    => "Nom Personnel",
                'required' => true
            ))
            ->add('TzSekolikoPersoPrenom', TextType::class, array(
                'label'    => "Prenom personnel",
                'required' => true
            ))
            ->add('TzSekolikoPersoFonction', TextType::class, array(
                'label'    => "Fonction personnel",
                'required' => true
            ))
            ->add('TzSekolikoPersoDateDebut', DateTimeType::class, array(
                'label'  => "Date fin",
                'format' => 'dd/MM/yyyy',
                'attr'   => array(
                    'class'         => 'kl-datetimepicker-simple',
                    'required'      => true,
                    'autocomplete'  => 'off'
                )))
            ->add('TzSekolikoPersoDateFin', DateTimeType::class, array(
                'label'  => "Date de fin",
                'format' => 'dd/MM/yyyy',
                'attr'   => array(
                    'class'         => 'kl-datetimepicker-simple',
                    'required'      => true,
                    'autocomplete'  => 'off'
            )))
            ->add('TzSekolikoPersoIsFin', IntegerType::class, array(
                'label'    => "Le personnel n'est plus",
                'required' => false
            ))
            ->add('TzSekolikoPersoContact', TextType::class, array(
                'label'    => "Fonction personnel",
                'required' => true
            ))
            ->add('TzSekolikoPersoDateNaissance', DateTimeType::class, array(
                'label'  => "Date de naissance",
                'format' => 'dd/MM/yyyy',
                'attr'   => array(
                    'class'         => 'kl-datetimepicker-simple',
                    'required'      => true,
                    'autocomplete'  => 'off'
                )))
            ->add('TzSekolikoPersoSexe', TextType::class, array(
                'label'    => "Sexe",
                'required' => true
            ));
    }

/**
 * {@inheritdoc}
 */

public function configureOptions(OptionsResolver $resolver)
{
    $resolver->setDefaults(array(
        'data_class' => 'App\Sekoliko\Service\MetierManagerBundle\Entity\TzSekolikoPersonnel'
    ));
}




}