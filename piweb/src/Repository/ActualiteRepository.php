<?php

namespace App\Repository;
use App\Entity\Actualite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use http\QueryString;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Query;
/**
 * @method Actualite|null find($id, $lockMode = null, $lockVersion = null)
 * @method Actualite|null findOneBy(array $criteria, array $orderBy = null)
 * @method Actualite[]    findAll()
 * @method Actualite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActualiteRepository extends ServiceEntityRepository
{
    public function findByTitre($txt)
    {
        $entityManager=$this->getEntityManager();
        $query=$entityManager
            ->createQuery("SELECT a from APP\Entity\Actualite a where a.titre like :txt or a.description like :txt or a.dateajout  like :txt")
            ->setParameter('txt','%'.$txt.'%');
        return $query->getResult();
    }
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Actualite::class);
    }


}