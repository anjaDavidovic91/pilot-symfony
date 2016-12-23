<?php

namespace Bookkeeper\ManagerBundle\Controller;


use Symfony\Component\Debug\Debug;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Bookkeeper\ManagerBundle\Entity\Book;
use Bookkeeper\ManagerBundle\Form\BookType;
use Symfony\Component\HttpFoundation\Request;

class BookController extends Controller {

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $books = $em->getRepository('BookkeeperManagerBundle:Book')->findAll();

        return $this->render('BookkeeperManagerBundle:book:index.html.twig', array(
            'books' => $books
        ));
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $book = $em->getRepository('BookkeeperManagerBundle:Book')->find($id);

        $delete_form = $this->createFormBuilder()
            ->setAction($this->generateUrl('book_delete',array('id'=>$id)))
            ->setMethod('DELETE')
            ->add('submit','submit', array('label' => 'Delete book'))
            ->getForm();

        return $this->render('BookkeeperManagerBundle:book:show.html.twig', array(
            'book' => $book,
            'delete_form'=>$delete_form->createView()
        ));
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function newAction()
    {
        $book = new Book;

        $form = $this->createForm(new BookType(), $book, array(
            'action' => $this->generateUrl('book_create'),
            'method' => 'POST',
        ));

        $form->add('submit','submit',array('label'=>'Create book'));

        return $this->render('BookkeeperManagerBundle:book:new.html.twig', array(
            'form'=>$form->createView()
        ));
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function createAction(Request $request)
    {
        $book = new Book;

        $form = $this->createForm(new BookType(), $book, array(
            'action' => $this->generateUrl('book_create'),
            'method' => 'POST',
        ));

        $form->add('submit','submit',array('label'=>'Create book'));

        $form->handleRequest($request);

        if($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($book);
            $em->flush();

            $this->get('session')->getFlashBag()->add('Msg','Your book has been created');

            return $this->redirect($this->generateUrl('book_show', array('id'=>$book->getId())));
        }

        $this->get('session')->getFlashBag()->add('Msg','Something went wrong');

        return $this->render('BookkeeperManagerBundle:book:new.html.twig', array(
            'form'=>$form->createView()
        ));
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $book = $em->getRepository('BookkeeperManagerBundle:Book')->find($id);

        $form = $this->createForm(new BookType(), $book, array(
           'action' => $this->generateUrl('book_update', array('id' => $book->getId())),
           'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label'=> 'Update'));


        return $this->render('BookkeeperManagerBundle:book:edit.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $book = $em->getRepository('BookkeeperManagerBundle:Book')->find($id);

        $form = $this->createForm(new BookType(), $book, array(
            'action' => $form = $this->generateUrl('book_update', array('id'=> $book->getId())),
            'method' => 'PUT'
        ));


        $form->add('submit','submit', array('label'=>'Update'));

        $form->handleRequest($request);

        if($form->isValid()){

            $em->flush();

            $this->get('session')->getFlashBag()->add('Msg','Your book has been updated');

            return $this->redirect($this->generateUrl('book_show', array('id'=>$id)));
        }

        return $this->render('BookkeeperManagerBundle:book:edit.html.twig', array('id'=>$book->getId()));
    }

    public function deleteAction(Request $request, $id)
    {
        $delete_form = $this->createFormBuilder()
            ->setAction($this->generateUrl('book_delete',array('id'=>$id)))
            ->setMethod('DELETE')
            ->add('submit','submit', array('label' => 'Delete book'))
            ->getForm();

        $delete_form->handleRequest($request);

        if($delete_form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $book = $em->getRepository('BookkeeperManagerBundle:Book')->find($id);
            $em->remove($book);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('book'));
    }

}

