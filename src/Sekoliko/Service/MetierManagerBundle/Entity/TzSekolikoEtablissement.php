<?php

namespace App\Sekoliko\Service\MetierManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TzSekolikoEtablissement
 *
 * @ORM\Table(name="tz_sekoliko_etablissement")
 * @ORM\Entity
 */
class TzSekolikoEtablissement
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
     * @ORM\Column(name="tz_sekoliko_nom", type="string", length=45, nullable=false)
     */
    private $_tz_sekoliko_nom;

    /**
     * @var string
     *
     * @ORM\Column(name="tz_sekoliko_adresse", type="string", length=100, nullable=false)
     */
    private $_tz_sekoliko_adresse;


    /**
     * @var string
     *
     * @ORM\Column(name="tz_sekoliko_phone", type="string", length=30, nullable=false)
     */
    private $_tz_sekoliko_phone;

    /**
     * @var string
     *
     * @ORM\Column(name="tz_sekoliko_mail", type="string", length=100, nullable=true)
     */
    private $_tz_sekoliko_mail;


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
    public function getTzSekolikoNom()
    {
        return $this->_tz_sekoliko_nom;
    }

    /**
     * @param string $tz_sekoliko_nom
     */
    public function setTzSekolikoNom($tz_sekoliko_nom)
    {
        $this->_tz_sekoliko_nom = $tz_sekoliko_nom;
    }

    /**
     * @return string
     */
    public function getTzSekolikoAdresse()
    {
        return $this->_tz_sekoliko_adresse;
    }

    /**
     * @param string $tz_sekoliko_adresse
     */
    public function setTzSekolikoAdresse($tz_sekoliko_adresse)
    {
        $this->_tz_sekoliko_adresse = $tz_sekoliko_adresse;
    }

    /**
     * @return string
     */
    public function getTzSekolikoPhone()
    {
        return $this->_tz_sekoliko_phone;
    }

    /**
     * @param string $tz_sekoliko_phone
     */
    public function setTzSekolikoPhone($tz_sekoliko_phone)
    {
        $this->_tz_sekoliko_phone = $tz_sekoliko_phone;
    }

    /**
     * @return string
     */
    public function getTzSekolikoMail()
    {
        return $this->_tz_sekoliko_mail;
    }

    /**
     * @param string $tz_sekoliko_mail
     */
    public function setTzSekolikoMail($tz_sekoliko_mail)
    {
        $this->_tz_sekoliko_mail = $tz_sekoliko_mail;
    }

}
