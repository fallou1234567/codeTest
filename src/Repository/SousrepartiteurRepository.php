<?php

namespace App\Repository;

use App\Entity\Sousrepartiteur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Sousrepartiteur>
 *
 * @method Sousrepartiteur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Sousrepartiteur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Sousrepartiteur[]    findAll()
 * @method Sousrepartiteur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SousrepartiteurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Sousrepartiteur::class);
    }

    public function add(Sousrepartiteur $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Sousrepartiteur $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Sousrepartiteur[] Returns an array of Sousrepartiteur objects
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

//    public function findOneBySomeField($value): ?Sousrepartiteur
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
