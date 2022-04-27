<?php


namespace App\Repository;
use App\Entity\Magasin;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use http\QueryString;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Query;
/**
 * @method Magasin|null find($id, $lockMode = null, $lockVersion = null)
 * @method Magasin|null findOneBy(array $criteria, array $orderBy = null)
 * @method Magasin[]    findAll()
 * @method Magasin[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MagasinRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Magasin::class);
    }


}