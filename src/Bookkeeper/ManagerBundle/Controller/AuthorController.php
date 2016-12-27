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

}