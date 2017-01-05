<?php


namespace Bookkeeper\ManagerBundle\Repositories;

use Doctrine\ORM\EntityRepository;

/**
 * Class MediaListRepository.
 */
class TestRepository extends EntityRepository
{

    public function findTest($name)
    {
       return $this->getEntityManager()
           ->createQuery(
               'SELECT 
                  author
                FROM
                  BookkeeperManagerBundle:Author author
                WHERE
                  author.firstname = :firstname
                '
           )
           ->setParameter('firstname',$name)
           ->getResult();
    }

}