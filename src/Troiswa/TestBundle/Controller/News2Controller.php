<?php

namespace Troiswa\TestBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Troiswa\TestBundle\Entity\News2;
use Troiswa\TestBundle\Form\News2Type;

/**
 * News2 controller.
 *
 */
class News2Controller extends Controller
{

    /**
     * Lists all News2 entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TroiswaTestBundle:News2')->findAll();

        return $this->render('TroiswaTestBundle:News2:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new News2 entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new News2();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('news2_show', array('id' => $entity->getId())));
        }

        return $this->render('TroiswaTestBundle:News2:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a News2 entity.
    *
    * @param News2 $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(News2 $entity)
    {
        $form = $this->createForm(new News2Type(), $entity, array(
            'action' => $this->generateUrl('news2_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new News2 entity.
     *
     */
    public function newAction()
    {
        $entity = new News2();
        $form   = $this->createCreateForm($entity);

        return $this->render('TroiswaTestBundle:News2:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a News2 entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TroiswaTestBundle:News2')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find News2 entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TroiswaTestBundle:News2:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing News2 entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TroiswaTestBundle:News2')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find News2 entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TroiswaTestBundle:News2:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a News2 entity.
    *
    * @param News2 $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(News2 $entity)
    {
        $form = $this->createForm(new News2Type(), $entity, array(
            'action' => $this->generateUrl('news2_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing News2 entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TroiswaTestBundle:News2')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find News2 entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('news2_edit', array('id' => $id)));
        }

        return $this->render('TroiswaTestBundle:News2:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a News2 entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TroiswaTestBundle:News2')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find News2 entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('news2'));
    }

    /**
     * Creates a form to delete a News2 entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('news2_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
