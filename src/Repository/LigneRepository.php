<?php

namespace App\Repository;

use App\Entity\Ligne;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Ligne|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ligne|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ligne[]    findAll()
 * @method Ligne[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LigneRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ligne::class);
    }

    // /**
    //  * @return Ligne[] Returns an array of Ligne objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    
    public function search(Ligne $ligne)
    {
        $queryBuilder = $this->createQueryBuilder('l');

        if ($ligne->getName()) {
            $queryBuilder
                ->andWhere('l.name =:name')
                ->setParameter('name', $ligne->getName())
            ;
        }

        if ($ligne->getCode()) {
            $queryBuilder
                ->andWhere('l.code =:code')
                ->setParameter('code', $ligne->getCode())
            ;
        }

        if ($ligne->getStartStation()) {
            $queryBuilder
                ->andWhere('l.StartStation =:StartStation')
                ->setParameter('StartStation', $ligne->getStartStation())
            ;
        }

        
        if ($ligne->getStartStation()) {
            $queryBuilder
                ->andWhere('l.StartStation =:StartStation')
                ->setParameter('StartStation', $ligne->getStartStation())
            ;
        }


        return $queryBuilder->getQuery()->getResult();
    }
    
}
