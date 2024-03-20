<?php

namespace App\Repository;

use App\Entity\Sber;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Sber>
 *
 * @method Sber|null find($id, $lockMode = null, $lockVersion = null)
 * @method Sber|null findOneBy(array $criteria, array $orderBy = null)
 * @method Sber[]    findAll()
 * @method Sber[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SberRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Sber::class);
    }

    //    /**
    //     * @return Sber[] Returns an array of Sber objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('s.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Sber
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
