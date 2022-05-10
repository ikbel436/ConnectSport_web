<?php


namespace App\Repository;
use App\Entity\Produit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use http\QueryString;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Query;
/**
 * @method Produit|null find($id, $lockMode = null, $lockVersion = null)
 * @method Produit|null findOneBy(array $criteria, array $orderBy = null)
 * @method Produit[]    findAll()
 * @method Produit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProduitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Produit::class);
    }
   public function findByCritere($critere)
   {
       $entityManager=$this->getEntityManager();
       $query=$entityManager
           ->createQuery("select p from app\Entity\Produit p where p.nomP like :critere")
           ->setParameter('critere','%'.$critere.'%');
       return $query->getResult();
   }

    /**
     * @return void
     */
    public function countbycategorie($id)
    {
        $query= $this->createQueryBuilder('p')

            ->select('COUNT(p) as count ')
            ->where('p.categorie=:categorie')
            ->setParameter('categorie',$id)

        ;
        return $query->getQuery()->getResult();
    }


    public function listOrderByNom ($idperso)
    {
       // return $this->createQueryBuilder('p')
         //   ->Where('p.idperso LIKE : idperso')
           // ->orderBy('p.nomP', 'DESC')
            //->getQuery()->getResult();
        $entityManager=$this->getEntityManager();
        $query=$entityManager->createQuery('select p from App\Entity\Produit p where p.idperso=:idperso order by p.nomP desc')
            ->setParameter('idperso',$idperso);
        return $query->getResult();
    }
    public function listOrderByPRIX($idperso)
    {
        //return $this->createQueryBuilder('p')
          //  ->orderBy('p.prix', 'DESC')
            //->getQuery()->getResult();
        $entityManager=$this->getEntityManager();
        $query=$entityManager->createQuery('select p from App\Entity\Produit p where p.idperso=:idperso order by p.prix desc')
            ->setParameter('idperso',$idperso);
        return $query->getResult();
    }

    /**
     * @return Produit[]
     */

    public function findByIdperso($idperso)
    {

        //return $this->createQueryBuilder('produit')
          //  ->Where('produit.idperso LIKE :idperso')
            //->setParameter('idperso', '%'.$idperso.'%')
            //->getQuery()
            //->getResult();


        $entityManager=$this->getEntityManager();
        $query=$entityManager->createQuery('select p from App\Entity\Produit p where p.idperso=:idperso')
            ->setParameter('idperso',$idperso);
        return $query->getResult();
    }



}