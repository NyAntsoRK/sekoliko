<?php
/**
 * Created by PhpStorm.
 * User: nyantso
 * Date: 21/10/18
 * Time: 03:23
 */

namespace App\Sekoliko\Service\MetierManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/*
 * TzSekolikoPersonnel
 *
 *@ORM\Table(name="TzSekolikoPersonnel")
 *@ORM\Entity
 *
 */

/**
 * TzSekolikoPersonnel
 *
 * @ORM\Table(name="TzSekolikoPersonnel")
 * @ORM\Entity
 */

class TzSekolikoPersonnel{

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
     * @ORM\Column(name="TzSekolikoPersoNom", type="string",length=100, nullable=false)
     */
    private $tzsekolikopersonom;

    /**
     * @var string
     *
     * @ORM\Column(name="TzSekolikoPersoPrenom", type="string",length=100, nullable=true)
     */
    private $tzsekolikopersoprenom;

    /**
     * @var string
     *
     * @ORM\Column(name="TzSekolikoPersoFonction", type="string",length=100, nullable=false)
     */
    private $tzsekolikopersofonction;

    /**
     * @var /Datetime
     *
     * @ORM\Column(name="TzSekolikoPersoDateDebut", type="time", nullable=false)
     */
    private $tzsekolikopersodatedebut;


    /**
     * @var /Datetime
     *
     * @ORM\Column(name="TzSekolikoPersoDateFin", type="time", nullable=true)
     */
    private $tzsekolikopersodatefin;


    /**
     * @var integer
     *
     * @ORM\Column(name="TzSekolikoPersoDateIsFin", type="integer",length=1, nullable=true)
     */
    private $tzsekolikopersodateisfin;


    /**
     * @var string
     *
     * @ORM\Column(name="TzSekolikoPersoContact", type="string",length=100, nullable=false)
     */
    private $tzsekolikopersocontact;


    /**
     * @var /Datetime
     *
     * @ORM\Column(name="TzSekolikoPersoDateNaissance", type="time", nullable=false)
     */
    private $tzsekolikopersodatenaissance;


    /**
     * @var string
     *
     * @ORM\Column(name="TzSekolikoPersoSexe", type="string",length=20, nullable=false)
     */
    private $tzsekolikopersosexe;


    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }
    /**
     * @return string
     */
    public function gettzsekolikopersonom()
    {
        return $this->tzsekolikopersonom;
    }

    /**
     * @param string $tzsekolikopersonom
     */
    public function settzsekolikopersonom(string $tzsekolikopersonom)
    {
        $this->tzsekolikopersonom = $tzsekolikopersonom;
    }

    /**
     * @return string
     */
    public function gettzsekolikopersoprenom()
    {
        return $this->tzsekolikopersoprenom;
    }

    /**
     * @param string $tzsekolikopersoprenom
     */
    public function settzsekolikopersoprenom(string $tzsekolikopersoprenom)
    {
        $this->tzsekolikopersoprenom = $tzsekolikopersoprenom;
    }

    /**
     * @return string
     */
    public function gettzsekolikopersofonction()
    {
        return $this->tzsekolikopersofonction;
    }

    /**
     * @param string $tzsekolikopersofonction
     */
    public function setTzsekolikopersofonction(string $tzsekolikopersofonction)
    {
        $this->tzsekolikopersofonction = $tzsekolikopersofonction;
    }

    /**
     * @return mixed
     */
    public function getTzsekolikopersodatedebut()
    {
        return $this->tzsekolikopersodatedebut;
    }

    /**
     * @param mixed $tzsekolikopersodatedebut
     */
    public function setTzsekolikopersodatedebut($tzsekolikopersodatedebut)
    {
        $this->tzsekolikopersodatedebut = $tzsekolikopersodatedebut;
    }

    /**
     * @return mixed
     */
    public function getTzsekolikopersodatefin()
    {
        return $this->tzsekolikopersodatefin;
    }

    /**
     * @param mixed $tzsekolikopersodatefin
     */
    public function setTzsekolikopersodatefin($tzsekolikopersodatefin)
    {
        $this->tzsekolikopersodatefin = $tzsekolikopersodatefin;
    }

    /**
     * @return int
     */
    public function getTzsekolikopersodateisfin()
    {
        return $this->tzsekolikopersodateisfin;
    }

    /**
     * @param int $tzsekolikopersodateisfin
     */
    public function setTzsekolikopersodateisfin(int $tzsekolikopersodateisfin)
    {
        $this->tzsekolikopersodateisfin = $tzsekolikopersodateisfin;
    }

    /**
     * @return string
     */
    public function getTzsekolikopersocontact()
    {
        return $this->tzsekolikopersocontact;
    }

    /**
     * @param string $tzsekolikopersocontact
     */
    public function setTzsekolikopersocontact(string $tzsekolikopersocontact)
    {
        $this->tzsekolikopersocontact = $tzsekolikopersocontact;
    }

    /**
     * @return mixed
     */
    public function getTzsekolikopersodatenaissance()
    {
        return $this->tzsekolikopersodatenaissance;
    }

    /**
     * @param mixed $tzsekolikopersodatenaissance
     */
    public function setTzsekolikopersodatenaissance($tzsekolikopersodatenaissance)
    {
        $this->tzsekolikopersodatenaissance = $tzsekolikopersodatenaissance;
    }

    /**
     * @return string
     */
    public function getTzsekolikopersosexe()
    {
        return $this->tzsekolikopersosexe;
    }

    /**
     * @param string $tzsekolikopersosexe
     */
    public function setTzsekolikopersosexe(string $tzsekolikopersosexe)
    {
        $this->tzsekolikopersosexe = $tzsekolikopersosexe;
    }

}