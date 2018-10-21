<?php
/**
 * Created by PhpStorm.
 * User: jul
 * Date: 10/21/18
 * Time: 5:27 AM
 */

namespace App\Sekoliko\Service\MetierManagerBundle\Metier\TzSekolikoEtudiant;

use App\Sekoliko\Service\MetierManagerBundle\Utils\EntityName;
use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\HttpFoundation\Request;


/**
 * Class TzSekolikoEtudiant
 * @package App\Sekoliko\Service\MetierManagerBundle\Metier\TzSekolikoEtudiant
 */
class TzSekolikoEtudiant
{
    private $_entity_manager;
    private $_container;

    public function __construct(EntityManager $_entity_manager, Container $_container)
    {
        $this->_entity_manager = $_entity_manager;
        $this->_container = $_container;
    }

    /**
     * Récuperer le repository Etudiant
     * @return array
     */
    public function getRepository()
    {
        return $this->_entity_manager->getRepository(EntityName::Sekoliko_ETUDIANT);
    }
}