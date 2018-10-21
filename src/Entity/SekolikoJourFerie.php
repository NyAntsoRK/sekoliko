<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SekolikoJourFerie
 *
 * @ORM\Table(name="sekoliko_jour_ferie")
 * @ORM\Entity
 */
class SekolikoJourFerie
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
     * @ORM\Column(name="jr_fer_nom", type="string", length=45, nullable=true)
     */
    private $jrFerNom;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="jr_fer_date", type="date", nullable=true)
     */
    private $jrFerDate;


}
