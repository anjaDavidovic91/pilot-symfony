<?php

namespace Bookkeeper\ManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Bookkeeper\ManagerBundle\Entity\Book;
use Bookkeeper\ManagerBundle\Entity\Author;

/**
 * Class BookCategory
 * @package Bookkeeper\ManagerBundle\Entity
 */

class BookCategory{

    /**
     * @ORM\ManyToOne(targetEntity="Book")
     */
    protected $book_id;

    /**
     * @ORM\ManyToOne(targetEntity="Category")
     */
    protected $category_id;

}
