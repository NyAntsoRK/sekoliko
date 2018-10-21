<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SekolikoHoraire
 *
 * @ORM\Table(name="sekoliko_horaire")
 * @ORM\Entity
 */
class SekolikoHoraire
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="hr_date_debut_saison", type="datetime", nullable=true)
     */
    private $hrDateDebutSaison;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="hr_date_fin_saison", type="datetime", nullable=true)
     */
    private $hrDateFinSaison;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="hr_debut", type="time", nullable=true)
     */
    private $hrDebut;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="hr_fin", type="time", nullable=true)
     */
    private $hrFin;


}
