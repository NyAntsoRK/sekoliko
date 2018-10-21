<?php

namespace App\Sekoliko\Service\MetierManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * TzSekolikoSession
 *
 * @ORM\Table(name="tz_sekoliko_session")
 * @ORM\Entity
 */
class TzSekolikoSession
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
     * @ORM\Column(name="_tz_sekoliko_session_debut", type="string", length=45, nullable=false)
     */
    private $_tz_sekoliko_session_debut;
   
    /**
     * @var string
     *
     * @ORM\Column(name="_tz_sekoliko_session_fin", type="string", length=45, nullable=false)     
     */
    private $_tz_sekoliko_session_fin;


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
    public function getSekSessDeb()
    {
        return $this->_tz_sekoliko_session_debut;
    }
    
    /**
     * @param string $hrFin
     */
    public function setSekSessDeb( $_tz_sekoliko_session_debut)
    {
        $this->_tz_sekoliko_session_debut = $_tz_sekoliko_session_debut;
    }

     /**
     * @return string
     */
    public function getSekSessFin()
    {
        return $this->_tz_sekoliko_session_fin;
    }
    
    /**
     * @param string $hrFin
     */
    public function setSekSessFin( $_tz_sekoliko_session_fin)
    {
        $this->_tz_sekoliko_session_fin = $_tz_sekoliko_session_fin;
    }
   
}
