<?php

namespace App\Repository;
use App\Entity\Evenement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use http\QueryString;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Query;
/**
 * @method Evenement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Evenement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Evenement[]    findAll()
 * @method Evenement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EvenementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Evenement::class);
    }

    /**
     * @return Evenement[]
     */
    public function findOneBySujet($sujet){
        return $this->createQueryBuilder('evenement')
            ->Where('evenement.id LIKE :sujet or evenement.nom LIKE :sujet  or evenement.lieu Like :sujet  or evenement.date LIKE :sujet or evenement.nbparticipation Like :sujet or evenement.description like :sujet ')
            ->setParameter('sujet', '%'.$sujet.'%')
            ->getQuery()
            ->getResult();
    }
    public function findEntitiesByString($str){
        $qb = $this->createQueryBuilder('e');
        $qb->select('e')
            ->where('e.nom LIKE :str')
            ->setParameter('str', '%' .$str . '%');

        return $qb->getQuery()->getResult();
    }
    /**
     * @param $id
     * @return float|int|mixed|string
     */
    public function finbyfour($id)
    {
        return $this->createQueryBuilder('e')
            ->join('e.ids', 'c')
            ->addSelect('c')
            ->where('c.id=:id')
            ->setParameter('id',$id)
            ->getQuery()
            ->getResult();
    }



}


