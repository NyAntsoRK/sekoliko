<?php
/**
 * Created by PhpStorm.
 * User: nyantso
 * Date: 21/10/18
 * Time: 03:57
 */

namespace App\Sekoliko\Service\MetierManagerBundle\Metier\SekolikoPersonnel;

use App\Sekoliko\Service\MetierManagerBundle\Utils\EntityName;
use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\HttpFoundation\Request;


/**
 * Class ServiceMetierSekolikoPersonnel
 * @package App\Sekoliko\Service\MetierManagerBundle\Metier\SekolikoPersonnel
 */


class ServiceMetierPersonnel{

    private $entityManager;
    private $container;

    /**
     * ServiceMetierPersonnel constructor.
     * @param $entityManager
     */
    public function __construct($entityManager, $container)
    {
        $this->entityManager = $entityManager;
        $this->container     = $container;
    }

    /**
     * recuperation des personnel
     *
     * @return array
     */

    public function getRepository(){

        return $this->entityManager->getRepository(EntityName::Sekoliko_PERSONNEL);
    }

    /**
     * Recuperer la liste des personnes
     *
     * @return mixed
     */

    public function  getPersonne(){

        $personne = EntityName::Sekoliko_PERSONNEL;
        $req      = "SELECT * FROM $personne ORDER BY id";
        $query    = $this->entityManager->createQuery($req);

        $personnes = $query->getOneOrNullResult();

        $result = [];

        if($personnes){

            $result = [
                'TzSekolikoPersoNom'           => $personnes->getTzsekolikopersonom(),
                'TzSekolikoPersoPrenom'        => $personnes->getTzsekolikopersoprenom(),
                'TzSekolikoPersoFonction'      => $personnes->getTzsekolikopersofonction(),
                'TzSekolikoPersoDateDebut'     => $personnes->getTzsekolikopersodatedebut(),
                'TzSekolikoPersoDatefin'       => $personnes->getTzsekolikopersodatefin(),
                'TzSekolikoPersoDateIsFin'     => $personnes->getTzsekolikopersodateisfin(),
                'TzSekolikoPersoContact'       => $personnes->getTzsekolikopersocontact(),
                'TzSekolikoPersoDateNaissance' => $personnes->getTzsekolikopersodatenaissance(),
                'TzSekolikoPersoSexe'          => $personnes->getTzsekolikopersosexe()

            ];
        }

        return $result;

    }

}