<?php

namespace App\Sekoliko\Service\MetierManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * TzSekolikoNote
 *
 * @ORM\Table(name="tz_sekoliko_note")
 * @ORM\Entity
 */
class TzSekolikoNote
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

     /**
     * @var string
     *
     * @ORM\Column(name="_tz_sekoliko_note_valeur", type="string", length=100, nullable=false)
     */
    private $_tz_sekoliko_note_valeur;
   

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

     /**
     * @return string
     */
    public function getSekNoteVal()
    {
        return $this->_tz_sekoliko_note_valeur;
    }

    /**
     * @param string $hrFin
     */
    public function setSekNoteVal( $_tz_sekoliko_note_valeur)
    {
        $this->_tz_sekoliko_note_valeur = $_tz_sekoliko_note_valeur;
    }

}
