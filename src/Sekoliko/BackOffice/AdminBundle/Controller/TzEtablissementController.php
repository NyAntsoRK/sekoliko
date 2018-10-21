<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 10/17/18
 * Time: 7:11 PM
 */

namespace App\Sekoliko\BackOffice\AdminBundle\Controller;



use App\Sekoliko\Service\MetierManagerBundle\Entity\TzSekolikoEtablissement;
use App\Sekoliko\Service\MetierManagerBundle\Utils\EntityName;
use App\Sekoliko\Service\MetierManagerBundle\Utils\ServiceName;
use App\Sekoliko\Service\MetierManagerBundle\Metier\SekolikoEtablissement\TzServiceMetierEtablissement;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class TzSekolikoEtablissement
 * @package App\Sekoliko\BackOffice\AdminBundle\Controller;
 */
class TzEtablissementController extends Controller
{


    public function indexAction()
    {
        // Récupérer manager
        $_etablissement_manager = $this->get(ServiceName::SRV_METIER_UTILS);

        // Récupérer tout les role
        $_etablissement = $_etablissement_manager->getAllEntities(EntityName::Sekoliko_ETABLISSEMENT);

        return $this->render('AdminBundle:SekolikoEtablissement:index.html.twig',array(
            'etablisements' => $_etablissement
        ));
    }


    /**
     * Affichage page modification activite
     * @param TzSekolikoEtablissement $activite
     * @return Render page
     */
    public function editAction(TzSekolikoEtablissement $_sekoliko_etablissement )
    {
        if (!$_sekoliko_etablissement) {
            throw $this->createNotFoundException('Unable to find TzActivite entity.');
        }

        $_edit_form = $this->createEditForm($_sekoliko_etablissement);

        return $this->render('AdminBundle:SekolikoEtablissement:edit.html.twig', array(
            'activite'    => $_sekoliko_etablissement,
            'edit_form'   => $_edit_form->createView()
        ));
    }

    /**
     * Création etablissement
     * @param Request $_request requête
     * @return Render page
     */
    public function newAction(Request $_request)
    {
        // Récupérer manager
        $_utils_manager = $this->get(ServiceName::SRV_METIER_UTILS);

        $_etablissement = new TzSekolikoEtablissement();
        $_form = $this->createCreateForm($_etablissement);
        $_form->handleRequest($_request);

        if ($_form->isSubmitted() && $_form->isValid()) {
            // Enregistrement rôle
            $_utils_manager->saveEntity($_etablissement, 'new');

            $_flash_message = $this->get('translator')->trans('bo.confirmation.ajout');

            $_utils_manager->setFlash('success', $_flash_message );

            return $this->redirect($this->generateUrl('etablissement_index'));
        }

        return $this->render('@Admin/SekolikoEtablissement/add.html.twig', array(
            'role' => $_etablissement,
            'form' => $_form->createView(),
        ));
    }

    /**
     * Modification activite
     * @param Request $_request requête
     * @param TzSekolikoEtablissement $_etablissement
     * @return Render page
     */
    public function updateAction(Request $_request, TzSekolikoEtablissement $_etablissement)
    {
        // Récupérer manager

        // Récupérer manager
        $_utils_manager = $this->get(ServiceName::SRV_METIER_UTILS);

        if (!$_etablissement) {
            throw $this->createNotFoundException('Unable to find SekolikoRole entity.');
        }

        $_edit_form = $this->createEditForm($_etablissement);
        $_edit_form->handleRequest($_request);

        if ($_edit_form->isValid()) {
            $_utils_manager->saveEntity($_etablissement, 'update');

            $_flash_message = $this->get('translator')->trans('bo.confirmation.modification');

            $_utils_manager->setFlash('success', $_flash_message);

            return $this->redirect($this->generateUrl('etablissement_index'));
        }

        return $this->render('@Admin/SekolikoEtablissement/edit.html.twig', array(
            'role'      => $_etablissement,
            'edit_form' => $_edit_form->createView()
        ));
    }

    /**
     * Création formulaire d'édition rôle
     * @param TzSekolikoEtablissement $_role The entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TzSekolikoEtablissement $_etablissement)
    {
        $_form = $this->createForm(\App\Sekoliko\Service\MetierManagerBundle\Form\TzSekolikoEtablissement::class,
            $_etablissement, array(
            'action' => $this->generateUrl('etablissement_new'),
            'method' => 'POST'
        ));

        return $_form;
    }

    /**
     * Création formulaire de création rôle
     * @param TzSekolikoEtablissement $_role The entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(TzSekolikoEtablissement $_role)
    {
        $_form = $this->createForm(\App\Sekoliko\Service\MetierManagerBundle\Form\TzSekolikoEtablissement::class, $_role, array(
            'action' => $this->generateUrl('etablissement_update', array('id' => $_role->getId())),
            'method' => 'PUT'
        ));

        return $_form;
    }

    /**
     * Suppression rôle
     * @param Request $_request requête
     * @param TzSekolikoEtablissement $_role
     * @return Redirect redirection
     */
    public function deleteAction(Request $_request, TzSekolikoEtablissement $_etablissement)
    {
        // Récupérer manager
        $_utils_manager = $this->get(ServiceName::SRV_METIER_UTILS);

        $_form = $this->createDeleteForm($_etablissement);
        $_form->handleRequest($_request);

        if ($_request->isMethod('GET') || ($_form->isSubmitted() && $_form->isValid())) {
            // Suppression rôle
            $_utils_manager->deleteEntity($_etablissement);

            $_flash_message = $this->get('translator')->trans('bo.confirmation.suppression');

            $_utils_manager->setFlash('success', $_flash_message);
        }

        return $this->redirectToRoute('etablissement_index');
    }

    /**
     * Création formulaire de suppression rôle
     * @param TzSekolikoEtablissement $_role The SekolikoRole entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TzSekolikoEtablissement $_role)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('etablissement_delete', array('id' => $_role->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }

    /**
     * Suppression par groupe séléctionnée
     * @param Request $_request
     * @return Redirect liste rôle
     */
    public function deleteGroupAction(Request $_request)
    {
        // Récupérer manager
        $_utils_manager = $this->get(ServiceName::SRV_METIER_UTILS);

        if ($_request->request->get('_group_delete') !== null) {
            $_ids = $_request->request->get('delete');
            if ($_ids == null) {
                $_selectionned_message = $this->get('translator')->trans('bo.confirmation.selection.suppression');

                $_utils_manager->setFlash('error', $_selectionned_message);

                return $this->redirect($this->generateUrl('etablissement_index'));
            }
            $_utils_manager->deleteGroupEntity(EntityName::Sekoliko_ETABLISSEMENT, $_ids);
        }

        $_flash_message = $this->get('translator')->trans('bo.confirmation.suppression');

        $_utils_manager->setFlash('success', $_flash_message);

        return $this->redirect($this->generateUrl('etablissement_index'));
    }
}