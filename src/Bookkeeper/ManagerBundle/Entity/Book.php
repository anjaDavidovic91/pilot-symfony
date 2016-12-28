<?php

namespace Bookkeeper\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Book
 * @package Bookkeeper\ManagerBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="book")
 */


class Book {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=150)
     * @Assert\NotBlank()
     * @Assert\Length(min=2)
     */
    protected $title;

    /**
     * @ORM\Column(type="string", length=150)
     * @Assert\NotBlank()
     * @Assert\Length(min=5, max=500)
     */
    protected $description;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     * @Assert\Type(type="integer")
     * @Assert\GreaterThan(value=0)
     */

    protected $pages;

//    /**
//     * Many Book have One Author.
//     * @ORM\Column(type="integer", name="author_id")
//     * @ORM\OneToMany(targetEntity="Author", mappedBy="id")
//     */

    /**
     * Many Book have One Author.
     * @ORM\ManyToOne(targetEntity="Author", inversedBy="book")
     * @ORM\JoinColumn(name="author_id", referencedColumnName="id")
     */
    protected $author;


    /**
     * Many Books have Many Categories.
     * @ORM\ManyToMany(targetEntity="Category", inversedBy="book")
     * @ORM\JoinTable(name="books_categories")
     */
    protected $category;

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
     * Set title
     *
     * @param string $title
     * @return Book
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Book
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set pages
     *
     * @param integer $pages
     * @return Book
     */
    public function setPages($pages)
    {
        $this->pages = $pages;

        return $this;
    }

    /**
     * Get pages
     *
     * @return integer 
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * Set author
     *
     * @param \Bookkeeper\ManagerBundle\Entity\Author $author
     * @return Book
     */
    public function setAuthor(\Bookkeeper\ManagerBundle\Entity\Author $author = null)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return \Bookkeeper\ManagerBundle\Entity\Author 
     */
    public function getAuthor()
    {
        return $this->author;
    }
}
