<?php

namespace App\Repository;

use App\Entity\Reclamation;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use http\QueryString;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Query;
/**
 * @method Reclamation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reclamation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reclamation[]    findAll()
 * @method Reclamation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReclamationRepository extends ServiceEntityRepository
{
    public function findByTitres($txt)
    {
        $entityManager=$this->getEntityManager();
        $query=$entityManager
            ->createQuery("SELECT r from APP\Entity\Reclamation r,APP\Entity\Categorie c, APP\Entity\Personne p where r.idCat=c.id and r.idPer=p.id and r.titre like :txt or r.description like :txt or r.dateajout  like :txt")
            ->setParameter('txt','%'.$txt.'%');
        return $query->getResult();
    }
    public function findByCat($txt)
    {
        $entityManager=$this->getEntityManager();
        $query=$entityManager
            ->createQuery("SELECT r from APP\Entity\Reclamation r,APP\Entity\Categorie c where r.idCat=c.id  and c.nom like :txt ")
            ->setParameter('txt','%'.$txt.'%');
        return $query->getResult();
    }

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reclamation::class);
    }

    public function findByidPer($fan)
    {
        $entityManager=$this->getEntityManager();
        $query=$entityManager
            ->createQuery("SELECT r from APP\Entity\Reclamation r where r.idPer=:fan ")
            ->setParameter('fan',$fan);
        return $query->getResult();
    }
}