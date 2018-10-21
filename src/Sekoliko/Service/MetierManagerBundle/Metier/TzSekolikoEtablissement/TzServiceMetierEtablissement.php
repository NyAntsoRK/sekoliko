<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 10/16/18
 * Time: 11:27 PM
 */

namespace App\Sekoliko\Service\MetierManagerBundle\Metier\TzSekolikoEtablissement;

use App\Sekoliko\Service\MetierManagerBundle\Form\TzSekolikoEtablissement;
use App\Sekoliko\Service\MetierManagerBundle\Metier\SekolikoEtablissement;
use Doctrine\ORM\EntityManager;
use App\Sekoliko\Service\MetierManagerBundle\Utils\EntityName;
use Symfony\Component\DependencyInjection\Container;

class TzServiceMetierEtablissement
{
    private $_entity_manager;
    private $_container;

    public function __construct(EntityManager $_entity_manager, Container $_container)
    {
        $this->_entity_manager = $_entity_manager;
        $this->_container      = $_container;
    }

    /**
     * Ajouter un message flash
     * @param string $_type
     * @param string $_message
     * @return mixed
     */
    public function setFlash($_type, $_message) {
        return $this->_container->get('session')->getFlashBag()->add($_type, $_message);
    }


    public function getRepository()
    {
        return $this->_entity_manager->getRepository(EntityName::Sekoliko_ETABLISSEMENT);
    }


    public function getEtablissement()
    {
        return $this->getRepository()->findBy(array(), array('id' => 'ASC'));
    }

    /**
     * Ajouter un etablissement
     * @param TzSekolikoEtablissement $_tz_etablissement
     * @param Object $_form
     * @return boolean
     */
    public function addEtablissement($_etablissement)
    {
        $this->saveEtablissement($_etablissement, 'new');
    }


    /**
     * Enregistrer un utilisateur
     * @param TzSekolikoEtablissement $_etablissement
     * @param string $_action
     * @return boolean
     */
    public function saveEtablissement($_etablissement, $_action)
    {
        if ($_action == 'new') {
            $this->_entity_manager->persist($_etablissement);
        }
        $this->_entity_manager->flush();

        return $_etablissement;
    }


    /**
     * Modifier un activite
     * @param TzSekolikoEtablissement $activite
     * @param Object $_form
     * @return boolean
     */
    public function updateActivite($_etablissement)
    {
        $this->saveEtablissement($_etablissement, 'update');
    }

    /**
     * Supprimer un utilisateur
     * @param TzSekolikoEtablissement $_etablissement
     * @return boolean
     */
    public function deleteEtablissement($_etablissement)
    {
        $this->_entity_manager->remove($_etablissement);
        $this->_entity_manager->flush();

        return true;
    }

}