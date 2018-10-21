<?php

namespace App\Sekoliko\Service\MetierManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * TzSekolikoProf
 * 
 * @ORM\Table(name="tz_sekoliko_prof")
 * @ORM\Entity
 * 
 */
Class TzSekolikoProf {
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
     * @ORM\Column(name="tz_sekoliko_prof_nom", type="string", length=45, nullable=true)
     */
    private $tz_sekoliko_prof_nom;

    /**
     * @var string
     *
     * @ORM\Column(name="tz_sekoliko_prof_prenom", type="string", length=100, nullable=true)
     */
    private $tz_sekoliko_prof_prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="tz_sekoliko_prof_fonction", type="string", length=100, nullable=true)
     */
    private $tz_sekoliko_prof_fonction;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tz_sekoliko_prof_date_debut", type="date", nullable=true)
     */
    private $tz_sekoliko_prof_date_debut;

    /**
     * @var string
     *
     * @ORM\Column(name="tz_sekoliko_prof_contact", type="string", length=100, nullable=true)
     */
    private $tz_sekoliko_prof_contact;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tz_sekoliko_prof_date_fin", type="date", nullable=true)
     */
    private $tz_sekoliko_prof_date_fin;

    /**
     * @var \TinyInt
     *
     * @ORM\Column(name="tz_sekoliko_prof_date_is_fin", type="date", nullable=true)
     */
    private $tz_sekoliko_prof_date_is_fin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tz_sekoliko_prof_date_naissance", type="date", nullable=true)
     */
    private $tz_sekoliko_prof_date_naissance;
    

    /**
     * Get the value of id
     *
     * @return  integer
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param  integer  $id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of tz_sekoliko_prof_nom
     *
     * @return  string
     */ 
    public function getTz_sekoliko_prof_nom()
    {
        return $this->tz_sekoliko_prof_nom;
    }

    /**
     * Set the value of tz_sekoliko_prof_nom
     *
     * @param  string  $tz_sekoliko_prof_nom
     *
     * @return  self
     */ 
    public function setTz_sekoliko_prof_nom(string $tz_sekoliko_prof_nom)
    {
        $this->tz_sekoliko_prof_nom = $tz_sekoliko_prof_nom;

        return $this;
    }

    /**
     * Get the value of tz_sekoliko_prof_prenom
     *
     * @return  string
     */ 
    public function getTz_sekoliko_prof_prenom()
    {
        return $this->tz_sekoliko_prof_prenom;
    }

    /**
     * Set the value of tz_sekoliko_prof_prenom
     *
     * @param  string  $tz_sekoliko_prof_prenom
     *
     * @return  self
     */ 
    public function setTz_sekoliko_prof_prenom(string $tz_sekoliko_prof_prenom)
    {
        $this->tz_sekoliko_prof_prenom = $tz_sekoliko_prof_prenom;

        return $this;
    }

    /**
     * Get the value of tz_sekoliko_prof_fonction
     *
     * @return  string
     */ 
    public function getTz_sekoliko_prof_fonction()
    {
        return $this->tz_sekoliko_prof_fonction;
    }

    /**
     * Set the value of tz_sekoliko_prof_fonction
     *
     * @param  string  $tz_sekoliko_prof_fonction
     *
     * @return  self
     */ 
    public function setTz_sekoliko_prof_fonction(string $tz_sekoliko_prof_fonction)
    {
        $this->tz_sekoliko_prof_fonction = $tz_sekoliko_prof_fonction;

        return $this;
    }

    /**
     * Get the value of tz_sekoliko_prof_date_debut
     *
     * @return  \DateTime
     */ 
    public function getTz_sekoliko_prof_date_debut()
    {
        return $this->tz_sekoliko_prof_date_debut;
    }

    /**
     * Set the value of tz_sekoliko_prof_date_debut
     *
     * @param  \DateTime  $tz_sekoliko_prof_date_debut
     *
     * @return  self
     */ 
    public function setTz_sekoliko_prof_date_debut(\DateTime $tz_sekoliko_prof_date_debut)
    {
        $this->tz_sekoliko_prof_date_debut = $tz_sekoliko_prof_date_debut;

        return $this;
    }

    /**
     * Get the value of tz_sekoliko_prof_contact
     *
     * @return  string
     */ 
    public function getTz_sekoliko_prof_contact()
    {
        return $this->tz_sekoliko_prof_contact;
    }

    /**
     * Set the value of tz_sekoliko_prof_contact
     *
     * @param  string  $tz_sekoliko_prof_contact
     *
     * @return  self
     */ 
    public function setTz_sekoliko_prof_contact(string $tz_sekoliko_prof_contact)
    {
        $this->tz_sekoliko_prof_contact = $tz_sekoliko_prof_contact;

        return $this;
    }

    /**
     * Get the value of tz_sekoliko_prof_date_fin
     *
     * @return  \DateTime
     */ 
    public function getTz_sekoliko_prof_date_fin()
    {
        return $this->tz_sekoliko_prof_date_fin;
    }

    /**
     * Set the value of tz_sekoliko_prof_date_fin
     *
     * @param  \DateTime  $tz_sekoliko_prof_date_fin
     *
     * @return  self
     */ 
    public function setTz_sekoliko_prof_date_fin(\DateTime $tz_sekoliko_prof_date_fin)
    {
        $this->tz_sekoliko_prof_date_fin = $tz_sekoliko_prof_date_fin;

        return $this;
    }

    /**
     * Get the value of tz_sekoliko_prof_date_is_fin
     *
     * @return  \TinyInt
     */ 
    public function getTz_sekoliko_prof_date_is_fin()
    {
        return $this->tz_sekoliko_prof_date_is_fin;
    }

    /**
     * Set the value of tz_sekoliko_prof_date_is_fin
     *
     * @param  \TinyInt  $tz_sekoliko_prof_date_is_fin
     *
     * @return  self
     */ 
    public function setTz_sekoliko_prof_date_is_fin(\TinyInt $tz_sekoliko_prof_date_is_fin)
    {
        $this->tz_sekoliko_prof_date_is_fin = $tz_sekoliko_prof_date_is_fin;

        return $this;
    }

    /**
     * Get the value of tz_sekoliko_prof_date_naissance
     *
     * @return  \DateTime
     */ 
    public function getTz_sekoliko_prof_date_naissance()
    {
        return $this->tz_sekoliko_prof_date_naissance;
    }

    /**
     * Set the value of tz_sekoliko_prof_date_naissance
     *
     * @param  \DateTime  $tz_sekoliko_prof_date_naissance
     *
     * @return  self
     */ 
    public function setTz_sekoliko_prof_date_naissance(\DateTime $tz_sekoliko_prof_date_naissance)
    {
        $this->tz_sekoliko_prof_date_naissance = $tz_sekoliko_prof_date_naissance;

        return $this;
    }
}