<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TzSekolikoProf
 *
 * @ORM\Table(name="tz_sekoliko_prof")
 * @ORM\Entity
 */
class TzSekolikoProf
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
     * @var string|null
     *
     * @ORM\Column(name="tz_sekoliko_prof_nom", type="string", length=45, nullable=true)
     */
    private $tzSekolikoProfNom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tz_sekoliko_prof_prenom", type="string", length=100, nullable=true)
     */
    private $tzSekolikoProfPrenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tz_sekoliko_prof_fonction", type="string", length=100, nullable=true)
     */
    private $tzSekolikoProfFonction;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tz_sekoliko_prof_date_debut", type="date", nullable=true)
     */
    private $tzSekolikoProfDateDebut;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tz_sekoliko_prof_contact", type="string", length=100, nullable=true)
     */
    private $tzSekolikoProfContact;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tz_sekoliko_prof_date_fin", type="date", nullable=true)
     */
    private $tzSekolikoProfDateFin;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tz_sekoliko_prof_date_is_fin", type="date", nullable=true)
     */
    private $tzSekolikoProfDateIsFin;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tz_sekoliko_prof_date_naissance", type="date", nullable=true)
     */
    private $tzSekolikoProfDateNaissance;


}
