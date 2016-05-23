<?php

namespace MyLabelBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MyLabelBundle\Entity\Labels;
use MyLabelBundle\Form\LabelsType;

/**
 * Labels controller.
 *
 * @Route("/labels")
 */
class LabelsController extends Controller
{
    /**
     * Lists all Labels entities.
     *
     * @Route("/", name="labels_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $labels = $em->getRepository('MyLabelBundle:Labels')->findAll();

        return $this->render('labels/index.html.twig', array(
            'labels' => $labels,
        ));
    }

    /**
     * Creates a new Labels entity.
     *
     * @Route("/new", name="labels_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $label = new Labels();
        $form = $this->createForm('MyLabelBundle\Form\LabelsType', $label);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($label);
            $em->flush();

            return $this->redirectToRoute('labels_show', array('id' => $label->getId()));
        }

        return $this->render('labels/new.html.twig', array(
            'label' => $label,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Labels entity.
     *
     * @Route("/{id}", name="labels_show")
     * @Method("GET")
     */
    public function showAction(Labels $label)
    {
        $deleteForm = $this->createDeleteForm($label);

        return $this->render('labels/show.html.twig', array(
            'label' => $label,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Labels entity.
     *
     * @Route("/{id}/edit", name="labels_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Labels $label)
    {
        $deleteForm = $this->createDeleteForm($label);
        $editForm = $this->createForm('MyLabelBundle\Form\LabelsType', $label);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($label);
            $em->flush();

            return $this->redirectToRoute('labels_edit', array('id' => $label->getId()));
        }

        return $this->render('labels/edit.html.twig', array(
            'label' => $label,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Labels entity.
     *
     * @Route("/{id}", name="labels_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Labels $label)
    {
        $form = $this->createDeleteForm($label);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($label);
            $em->flush();
        }

        return $this->redirectToRoute('labels_index');
    }

    /**
     * Creates a form to delete a Labels entity.
     *
     * @param Labels $label The Labels entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Labels $label)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('labels_delete', array('id' => $label->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
