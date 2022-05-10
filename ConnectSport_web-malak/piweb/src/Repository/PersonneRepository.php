<?php


namespace App\Repository;
use App\Entity\Personne;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use http\QueryString;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Query;
/**
 * @method Personne|null find($id, $lockMode = null, $lockVersion = null)
 * @method Personne|null findOneBy(array $criteria, array $orderBy = null)
 * @method Personne[]    findAll()
 * @method Personne[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PersonneRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Personne::class);
    }

    public function SearchName($data)
    {
        return $this->createQueryBuilder('p')
            ->where('p.nom LIKE :data')->orWhere('p.mail Like :data ')->orWhere('p.prenom Like :data ')->orWhere('p.adresse Like :data ')
            ->setParameter('data', '%'.$data.'%')
            ->getQuery()->getResult()
            ;

    }

    public function listOrderByAdresse()
    {
        return $this->createQueryBuilder('p')
            ->orderBy('p.adresse', 'ASC')

            ->getQuery()->getResult();
    }
    public function listOrderByNom ()
    {
        return $this->createQueryBuilder('p')
            ->orderBy('p.nom', 'DESC')
            ->getQuery()->getResult();
    }
    public function listOrderByPrenom ()
    {
        return $this->createQueryBuilder('p')
            ->orderBy('p.prenom', 'DESC')
            ->getQuery()->getResult();
    }
    /**
     * Returns number of "Personne" active
     * @return void
     */
    public function countByActive()
    {   $data='active';

        $query = $this->createQueryBuilder('a')
            ->select('a.etat as active,COUNT(a) as count')
            ->groupBy('active');
        return $query->getQuery()->getResult();
    }

    /**
     *Returns number of "Personne" role
     * @return  void
     */
    public function countRole()
    {

        $query = $this->createQueryBuilder('a')
            ->select('a.role as role,COUNT(a) as countt')
            ->groupBy('role');
        return $query->getQuery()->getResult();
    }

    /**
     *Returns number of "Personne" role
     * @return  void
     */
    public function countNb()
    {

        $query = $this->createQueryBuilder('a')
            ->select('a.nomequipe as equipe,COUNT(a) as counttt')
            ->groupBy('equipe');
        return $query->getQuery()->getResult();
    }

}