<?php
/**
 * Created by PhpStorm.
 * User: jul
 * Date: 10/21/18
 * Time: 3:07 AM
 */

namespace App\Sekoliko\Service\MetierManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * TzSekolikoEtudiant
 *
 * @ORM\Table(name="Tz_Sekoliko_Etudiant")
 * @ORM\Entity
 */
class TzSekolikoEtudiant
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $_id;

    /**
     * @var string
     *
     * @ORM\Column(name="tz_sekoliko_etudiant_nom", type="string", length=100, nullable=false)
     */
    private $_tz_sekoliko_etudiant_nom;


    /**
     * @var  string
     *
     * @ORM\Column(name="tz_sekoliko_etudiant_prenom", type="string", length=100, nullable=true)
     */
    private $_tz_sekoliko_etudiant_prenom;

    /**
     * @var  string
     *
     * @ORM\Column(name="tz_sekoliko_etudiant_contact", type="string", length=100, nullable=true)
     */
    private $_tz_sekoliko_etudiant_contact;

    /**
     * @var  string
     *
     * @ORM\Column(name="tz_sekoliko_etudiant_sexe", type="string", length=100, nullable=false)
     */
    private $_tz_sekoliko_etudiant_sexe;

    /**
     * @var  \DateTime
     *
     * @ORM\Column(name="tz_sekoliko_etudiant_date_naissance", type="datetime", nullable=false)
     */
    private $_tz_sekoliko_etudiant_date_naissance;


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $_id)
    {
        $this->id = $_id;
    }

    /**
     * @return string
     */
    public function getTzSekolikoEtudiantNom()
    {
        return $this->tz_sekoliko_etudiant_nom;
    }

    /**
     * @param string $_tz_sekoliko_etudiant_nom
     */
    public function setTzSekolikoEtudiantPrenom( $_tz_sekoliko_etudiant_prenom)
    {
        $this->TzSekolikoEtudiantPrenom = $_tz_sekoliko_etudiant_prenom;
    }

    /**
     * @return string
     */
    public function getTzSekolikoEtudiantContact()
    {
        return $this->TzSekolikoEtudiantContact;
    }

    /**
     * @param string $_tz_sekoliko_etudiant_contact
     */
    public function setTzSekolikoEtudiantContact( $_tz_sekoliko_etudiant_contact)
    {
        $this->TzSekolikoEtudiantContact = $_tz_sekoliko_etudiant_contact;
    }

    /**
     * @return \DateTime
     */
    public function getTzSekolikoEtudiantSexe()
    {
        return $this->TzSekolikoEtudiantSexe;
    }

    /**
     * @param string $_tz_sekoliko_etudiant_sexe
     */
    public function setTzSekolikoEtudiantSexe( $_tz_sekoliko_etudiant_sexe)
    {
        $this->TzSekolikoEtudiantSexe = $_tz_sekoliko_etudiant_sexe;
    }

    /**
     * @return \DateTime
     */
    public function getTzSekolikoEtudiantDateNaissance()
    {
        return $this->TzSekolikoEtudiantDateNaissance;
    }

    /**
     * @param \DateTime $_tz_sekoliko_etudiant_date_naissance
     */
    public function setTzSekolikoEtudiantDateNaissance( $_tz_sekoliko_etudiant_date_naissance)
    {
        $this->TzSekolikoEtudiantDateNaissance = $_tz_sekoliko_etudiant_date_naissance;
    }




}