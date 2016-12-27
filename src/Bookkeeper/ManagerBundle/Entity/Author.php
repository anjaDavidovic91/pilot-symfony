<?php

namespace Bookkeeper\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Bookkeeper\ManagerBundle\Entity\Book;


/**
 * Class Author
 * @package Bookkeeper\ManagerBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="authors")
 */

class Author{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=150)
     * @Assert\NotBlank()
     * @Assert\Length(min=5, max=500)
     */
    protected $firstname;


    /**
     * @ORM\Column(type="string", length=150)
     * @Assert\NotBlank()
     * @Assert\Length(min=5, max=500)
     */
    protected  $lastname;

//    /**
//     * @ORM\ManyToOne(targetEntity="Book", inversedBy="author")
//     * @ORM\JoinColumn(name="id", referencedColumnName="author_id")
//     *
//     */

    /**
     * @ORM\OneToMany(targetEntity="Book", mappedBy="author")
     */
    protected $books;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return Author
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return Author
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return Author
     */
    public function setBooks($books)
    {
        $this->books = $books;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getBooks()
    {
        return $this->books;
    }

    /**
     * Generates the magic method
     *
     */

    public function __toString(){
        // to show the name of the Category in the select
        return $this->firstname." ".$this->lastname;
        // to show the id of the Category in the select
        // return $this->id;
    }
}
