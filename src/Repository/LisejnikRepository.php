<?php

namespace App\Repository;

use App\Entity\Lisejnik;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Lisejnik>
 *
 * @method Lisejnik|null find($id, $lockMode = null, $lockVersion = null)
 * @method Lisejnik|null findOneBy(array $criteria, array $orderBy = null)
 * @method Lisejnik[]    findAll()
 * @method Lisejnik[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LisejnikRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Lisejnik::class);
    }

    //    /**
    //     * @return Lisejnik[] Returns an array of Lisejnik objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('l')
    //            ->andWhere('l.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('l.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Lisejnik
    //    {
    //        return $this->createQueryBuilder('l')
    //            ->andWhere('l.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
