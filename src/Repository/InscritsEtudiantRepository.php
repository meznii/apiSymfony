<?php

namespace App\Repository;

use App\Entity\InscritsEtudiant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method InscritsEtudiant|null find($id, $lockMode = null, $lockVersion = null)
 * @method InscritsEtudiant|null findOneBy(array $criteria, array $orderBy = null)
 * @method InscritsEtudiant[]    findAll()
 * @method InscritsEtudiant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InscritsEtudiantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InscritsEtudiant::class);
    }

    // /**
    //  * @return InscritsEtudiant[] Returns an array of InscritsEtudiant objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?InscritsEtudiant
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
