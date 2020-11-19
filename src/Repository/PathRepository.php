<?php

namespace App\Repository;

use App\Entity\Path;
use App\Entity\Station;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Path|null find($id, $lockMode = null, $lockVersion = null)
 * @method Path|null findOneBy(array $criteria, array $orderBy = null)
 * @method Path[]    findAll()
 * @method Path[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PathRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Path::class);
    }

    // /**
    //  * @return Path[] Returns an array of Path objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Path
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function getPath ( Station $startStation, Station $endStation )
    {
       $QUERY = "SELECT  e.name as engine_name , arrival_at, s.id, rang, p.ligne_id, p.station_id, s.name as station_name,
       ( SELECT ligne_id FROM PATH WHERE station_id = :start_station  LIMIT 1 ) AS line1,
       ( SELECT ligne_id FROM PATH WHERE station_id = :end_station LIMIT 1 ) AS line2 
       FROM timing t 
       
       JOIN path p ON t.path_id =p.id 
       JOIN station s ON p.station_id = s.id 
       JOIN engine e ON t.engine_id = e.id 
       
       HAVING line1 = line2 AND ligne_id = line1 
       ORDER BY e.id ASC, rang ASC
                    ";

            $statement = $this->_em->getConnection()->prepare($QUERY);
            $statement->execute([
                'start_station' => $startStation->getId() ,
                'end_station' => $endStation->getId() ,
            ]);
            
            $result = [];
            foreach ($statement->fetchAll() as $element) {
                
                if (!isset($result[$element['engine_name']])) {
                    $result[$element['engine_name']] = [
                        "name" => $element['engine_name'],
                        "timing" => []

                    ];
                }
            $result[$element['engine_name']]['timing'][] = $element ;

            }  

            return $result;
        }

}
