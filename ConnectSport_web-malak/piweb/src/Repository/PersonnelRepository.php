<?php
namespace App\Repository;
use App\Entity\Personnel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use http\QueryString;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Query;
/**
* @method Personnel|null find($id, $lockMode = null, $lockVersion = null)
* @method Personnel|null findOneBy(array $criteria, array $orderBy = null)
* @method Personnel[]    findAll()
* @method Personnel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
*/
class PersonnelRepository extends ServiceEntityRepository
{
public function __construct(ManagerRegistry $registry)
{
parent::__construct($registry, Personnel::class);

}
    /**
     * @return Personnel[]
     */
    public function findOneBySujet($sujet){
        return $this->createQueryBuilder('personnel')
            ->Where('personnel.cin LIKE :sujet or personnel.nom LIKE :sujet  or personnel.prenom Like :sujet  or personnel.datenaissance LIKE :sujet or personnel.adresse Like :sujet or personnel.mail like :sujet or personnel.sport like :sujet or personnel.categorie like :sujet ')
            ->setParameter('sujet', '%'.$sujet.'%')
            ->getQuery()
            ->getResult();
    }

    /**
     * @return Personnel[]
     */
    public function findOneByidrespo($idrespo){
        return $this->createQueryBuilder('personnel')
            ->Where('personnel.idrespo like :idrespo ')
            ->setParameter('idrespo', '%'.$idrespo.'%')
            ->getQuery()
            ->getResult();
    }
}
