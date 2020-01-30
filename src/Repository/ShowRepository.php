<?php

namespace App\Repository;

use App\Entity\Shows;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Shows|null find($id, $lockMode = null, $lockVersion = null)
 * @method Shows|null findOneBy(array $criteria, array $orderBy = null)
 * @method Shows[]    findAll()
 * @method Shows[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShowRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Shows::class);
    }

    // /**
    //  * @return Show[] Returns an array of Show objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    public function allSortedByDate()
    {
        return $this->createQueryBuilder('s')
            ->orderBy('s.dateShow', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }
}
