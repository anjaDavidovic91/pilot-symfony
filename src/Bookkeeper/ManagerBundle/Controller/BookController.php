<?php

namespace Bookkeeper\ManagerBundle\Controller;


use Bookkeeper\ManagerBundle\Entity\Author;
use Symfony\Component\Debug\Debug;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Bookkeeper\ManagerBundle\Entity\Book;
use Bookkeeper\ManagerBundle\Form\BookType;
use Bookkeeper\ManagerBundle\Entity\Category;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


/**
 * Class BookController
 * @package Bookkeeper\ManagerBundle\Controller
 * @Route("/book", name="book_prefix")
 */

class BookController extends Controller {


    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/index", name="book")
     */
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
     * @Route("/show/{id}", name="book_show")
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

        $author = $book->getAuthor()->getLastname();
//        var_dump($author);
//        die();
//        $repository = $this->getDoctrine()
//            ->getRepository('BookkeeperManagerBundle:Book');
//
//        $query = $repository->createQueryBuilder('b')
//            ->getQuery();
//
//        $productss = $query->getResult();
//
//        var_dump($productss);
//        die();

        return $this->render('BookkeeperManagerBundle:book:show.html.twig', array(
            'book' => $book,
            'delete_form'=>$delete_form->createView()
        ));
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/new", name="book_new")
     */
    public function newAction()
    {
        $book = new Book;

        $form = $this->createForm(new BookType(), $book, array(
            'action' => $this->generateUrl('book_create'),
            'method' => 'POST',
        ));

        $form->add('submit','submit',array('label'=>'Create book'));

        $em = $this->getDoctrine()->getManager();

        $repository = $em->getRepository('BookkeeperManagerBundle:Category');

        $categories = $repository->findAll();

        return $this->render('BookkeeperManagerBundle:book:new.html.twig', array(
            'form'=>$form->createView(),
            'categories'=>$categories
        ));
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/create", name="book_create")
     */
    public function createAction(Request $request)
    {
//        $bookk = $request->request->get('book')['author'];
//        var_dump($bookk);
//        die();

        $book = new Book;

        $form = $this->createForm(new BookType(), $book, array(
            'action' => $this->generateUrl('book_create'),
            'method' => 'POST',
        ));

//        var_dump($form);
//        die();

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
     * @Route("/edit/{id}", name="book_edit")
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
     * @Route("/update/{id}", name="book_update")
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


    /**
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route("/delete/{id}", name="book_delete")
     */
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

    /**
     * @Route("/table", name="action")
     */
    public function tableAction()
    {
        $em = $this->getDoctrine()->getManager();
        $sql = 'DROP TABLE book_category;';
        $connection = $em->getConnection();
        $stmt = $connection->prepare($sql);
        $stmt->execute();
        $stmt->closeCursor();
    }

    /**
     * @param Request $request
     * @Route("/category", name="book-category",requirements={"category" = "\d+"})
     */

    public function bookCategory(Request $request)
    {

        $finders = [];

        $categoryId = $request->request->get('category');

        $em = $this->getDoctrine()->getManager();

        $cat = new Category();
        $cat->setName("poezija");
        $cat->setDescription("asd");
        $em->persist($cat);
        $em->flush();

            $book = new Book();
            $book->setTitle("dasdas")   ;
            $book->setDescription("asdasdd");
            $book->addCategory($cat);
            $book->setPages(50);

            $author = new Author();
            $author->setFirstname("boban");
            $author->setLastname("bobanovic");
            $em->persist($author);
            $em->flush();
            $book->setAuthor($author);


            $em->persist($book);

        $em->flush();

//        $query = $repository->createQueryBuilder('a')
//            ->join('a.AccountData', 'd')
//            ->where('d.gender = :gender')
//            ->setParameter('gender', 'female')
//            ->getQuery();

//        $products =$qb->select('u')
//            ->from('book', 'u')
//            ->where('u.id = ?1')
//            ->orderBy('u.title', 'ASC');
//
//
//        $repository = $em->getRepository('BookkeeperManagerBundle:Category');
//
//        $query = $repository->createQueryBuilder('c')
//            ->where('c.name = :name')
//            ->setParameter('name', 'bajke')
//            ->getQuery();
//        var_dump($query->getResult());
//        die();
    }

}

