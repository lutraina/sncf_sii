<?php

namespace MyLabelBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MyLabelBundle\Entity\Demandes;
use MyLabelBundle\Form\DemandesType;
use MyLabelBundle\Form\DemandesRechercherType;

/**
 * Demandes controller.
 *
 * @Route("/demandes")
 */
class DemandesController extends Controller
{
    /**
     * Lists all Demandes entities.
     *
     * @Route("/", name="demandes_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $demandes = $em->getRepository('MyLabelBundle:Demandes')->findAll();
		
/*        return $this->render('menu/index.html', array(
            'demandes' => $demandes,
        ));
*/		
        return $this->render('demandes/index.html.twig', array(
            'demandes' => $demandes,
        ));
 }

    /**
     * Creates a new Demandes entity.
     *
     * @Route("/new", name="demandes_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $demande = new Demandes();
        $form = $this->createForm('MyLabelBundle\Form\DemandesType', $demande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($demande);
            $em->flush();

            return $this->redirectToRoute('labels_index');
        }

        return $this->render('demandes/new.html.twig', array(
            'demande' => $demande,
            'form' => $form->createView(),
        ));
    }


	/**
     * Displays a form to search for an existing Demandes entity.
     *
     * @Route("/rechercher", name="demandes_rechercher")
     * @Method({"GET", "POST"})
     */
    public function rechercherAction(Request $request)
    {
        $rechercherForm = $this->createForm('MyLabelBundle\Form\DemandesRechercherType');
		
        if($request->getMethod() == 'POST')
        {
            $rechercherForm->bind($request);

            //On vérifie que les valeurs entrées sont correctes
            if($rechercherForm->isValid())
            {
                //On récupère les données entrées dans le formulaire par l'utilisateur
                $data = $this->getRequest()->request->get('myylabelbundle_demandesrechercher');
        
                $em = $this->getDoctrine()->getManager();
                
                $laDemande = $em->getRepository('MyLabelBundle:Demandes')->findOneBy(array('id'        => $data['id'], 
                                                                                           'matricule' => $data['matricule']));

                if ($laDemande != null)
                {
                    return $this->redirectToRoute('demandes_show', array('id' => $laDemande->getId()));
                }
                else
                {
                    return $this->redirectToRoute('labels_index');
                }
                
            }
        
        }
       
        return $this->render('demandes/rechercher.html.twig', 
                             array('form' => $rechercherForm->createView()
                            ));
    }

	
    /**
     * Finds and displays a Demandes entity.
     *
     * @Route("/{id}", name="demandes_show")
     * @Method("GET")
     */
    public function showAction(Demandes $demande)
    {
        $rechercherForm = $this->createForm('MyLabelBundle\Form\DemandesRechercherType');

        return $this->render('demandes/show.html.twig', 
                             array('demande' => $demande,
                                   'form' => $rechercherForm->createView()
                            ));
    }

    /**
     * Displays a form to edit an existing Demandes entity.
     *
     * @Route("/{id}/edit", name="demandes_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Demandes $demande)
    {
        $deleteForm = $this->createDeleteForm($demande);
        $editForm = $this->createForm('MyLabelBundle\Form\DemandesType', $demande);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($demande);
            $em->flush();

            return $this->redirectToRoute('demandes_edit', array('id' => $demande->getId()));
        }

        return $this->render('demandes/edit.html.twig', array(
            'demande' => $demande,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Demandes entity.
     *
     * @Route("/{id}", name="demandes_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Demandes $demande)
    {
        $form = $this->createDeleteForm($demande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($demande);
            $em->flush();
        }

        return $this->redirectToRoute('demandes_index');
    }

    /**
     * Creates a form to delete a Demandes entity.
     *
     * @param Demandes $demande The Demandes entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Demandes $demande)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('demandes_delete', array('id' => $demande->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
