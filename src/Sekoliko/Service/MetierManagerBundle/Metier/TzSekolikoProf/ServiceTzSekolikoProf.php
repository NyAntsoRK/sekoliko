<?php

namespace App\Sekoliko\Service\MetierManagerBundle\Metier\TzSekolikoProf;

use App\Sekoliko\Service\MetierManagerBundle\Utils\EntityName;
use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class ServiceTzSekolikoProf
 * @package App\Sekoliko\Service\MetierManagerBundle\Metier\TzSekolikoProf
 */
class ServiceTzSekolikoProf
{
    private $_entity_manager;
    private $_container;

    /**
     * ServiceTzSekolikoProf constructor.
     * @param EntityManager $_entity_manager
     * @param Container $_container
     */

    public function __construct(EntityManager $_entity_manager, Container $_container)
    {
        $this->_entity_manager = $_entity_manager;
        $this->_container      = $_container;
    }

    

}
