<?php

namespace App\Sekoliko\BackOffice\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class SekolikoPersonnelController extends AbstractController
{

    public function indexAction()
    {
        return $this->render('AdminBundle:sekoliko_admin:index.html.twig', [
            'controller_name' => 'SekolikoPersonnelController',
        ]);
    }
}
