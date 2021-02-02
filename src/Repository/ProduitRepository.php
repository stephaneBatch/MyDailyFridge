<?php

namespace App\Repository;

use App\Entity\Produit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use App\Form\ProduitType;


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

    // /**
    //  * @return Produit[] Returns an array of Produit objects
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
    public function findOneBySomeField($value): ?Produit
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    //@return Product[]
    /**
     * 
     */
   // public function findAllProduitByStatus(): array
   // {
        /* $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(    
            'select * from produit p
            inner join historique_achat h
            on p.id = h.produit_id
            where h.etat_h != "Non valide" and h.etat_h != "undefined"');

            return $query->getResult(); */

 
        
    /*$conn = $this->getEntityManager()->getConnection();

    $sql = 'select nom,h.date_limite from produit p
            inner join historique_achat h
            on p.id = h.produit_id
            where h.etat_h != "Non valide" and h.etat_h != "undefined"';

    $stmt = $conn->prepare($sql);
    $stmt->execute();*/

    // returns an array of arrays (i.e. a raw data set)
    //return $stmt->fetchAll();
        
        /*
            'SELECT p
             FROM App\Entity\Produit p
             WHERE p.etat_h = :price
            '
             )->setParameter('price', $etatH)
        */
        //ORDER BY p.price ASC

        // returns an array of Product objects
        
    //}

    public function SelectProduit($produit_id)
    {
        $qb = $this->_em->createQueryBuilder();
 
        $qb->select('p')
           ->from('App:Produit', 'p')
           ->where('p.id =  :id')
          ->setParameter('id', $produit_id);
 
        return $qb->getQuery()
               ->getResult();
    }

    // public function search($nom) {
    //     return $this->createQueryBuilder('Produit')
    //         ->andWhere('Produit.Nom LIKE :nom')
    //         ->setParameter('nom', '%'.$nom.'%')
    //         ->getQuery()
    //         ->execute();
    // }
}

