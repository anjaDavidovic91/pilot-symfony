<?php

namespace Bookkeeper\ManagerBundle\Controller;

use Bookkeeper\ManagerBundle\Form\AuthorType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Bookkeeper\ManagerBundle\Entity\Author;
use Bookkeeper\ManagerBundle\Form\BookType;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class AuthorController
 * @package Bookkeeper\ManagerBundle\Controller
 * @Route("/author", name="author_prefix")
 */
class AuthorController extends Controller {

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/index", name="author")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $authors = $em->getRepository('BookkeeperManagerBundle:Author')->findAll();

        return $this->render('BookkeeperManagerBundle:author:index.html.twig', array(
            'authors' => $authors
        ));
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/create", name="book_create")
     */
    public function createAction(Request $request)
    {
        $author = new Author();

        $form = $this->createForm(new AuthorType(), $author, array(
            'action' => $this->generateUrl('author_create'),
            'method' => 'POST'
        ));

        $form->add('submit','submit', array('label'=> 'Create Author'));

        $form->handleRequest($request);

        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($author);
            $em->flush();
        }

        return $this->render('BookkeeperManagerBundle:author:new.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/new", name="new_author")
     */
    public function newAction()
    {
        $author = new Author();

        $form = $this->createForm(new AuthorType(), $author, array(
            'action' => $this->generateUrl('author_create'),
            'method' => 'POST'
        ));

        $form->add('submit','submit', array('label'=> 'Create Author'));

        return $this->render('BookkeeperManagerBundle:author:new.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/show/{id}", name="show_author")
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $repository = $em->getRepository('BookkeeperManagerBundle:Author');

        $author = $repository->find($id);

        $books = $author->getBooks();

//        foreach ($books as $book){
//            var_dump($book->getId());
//            die();
//        }

//        $delete_form = $this->createFormBuilder()
//            ->setAction($this->generateUrl('delete_author', array('id'=>$id)))
//            ->setMethod('DELETE')
//            ->add('submit','submit', array('label' => 'Delete author'))
//            ->getForm();

        return $this->render('BookkeeperManagerBundle:author:show.html.twig', array(
            'author' => $author,
            'books'  => $books
//            'delete_form'=>$delete_form->createView()
        ));


    }

}