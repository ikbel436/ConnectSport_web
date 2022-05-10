<?php

namespace App\Repository;
use App\Entity\Reservation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use http\QueryString;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Query;
/**
 * @method Reservation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reservation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reservation[]    findAll()
 * @method Reservation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */

class ReservationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservation::class);
    }
    /**
     * @param $id
     * @return float|int|mixed|string
     */
    public function finbyrev($id)
    {
        return $this->createQueryBuilder('r')
            ->join('r.idr', 'c')
            ->addSelect('c')
            ->where('c.id=:id')
            ->setParameter('id',$id)
            ->getQuery()
            ->getResult();
    }

    /**
     * @return void
     */
    public function countByevent(){
        $query = $this->createQueryBuilder('a')
            ->join('a.idr','c')
            ->select('c.nom as name, COUNT(a) as count')
            ->groupBy('c')
        ;
        return $query->getQuery()->getResult();

    }

    /**
     * @return Reservation[]
     */

    public function findByIdf($idf)
    {

        return $this->createQueryBuilder('reservation')
            ->Where('reservation.idf LIKE :idf')
            ->setParameter('idf', '%'.$idf.'%')
            ->getQuery()
            ->getResult();
    }


}