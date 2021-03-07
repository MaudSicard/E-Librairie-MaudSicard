<?php

namespace App\Repository;

use App\Entity\Group;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Group|null find($id, $lockMode = null, $lockVersion = null)
 * @method Group|null findOneBy(array $criteria, array $orderBy = null)
 * @method Group[]    findAll()
 * @method Group[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GroupRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Group::class);
    }

    // /**
    //  * @return Group[] Returns an array of Group objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Group
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function findBookByGender($gender)
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT g, b, a, e
            FROM App\Entity\Group g
            INNER JOIN g.book b
            INNER JOIN g.author a
            INNER JOIN g.editor e
            WHERE g.gender = :gender'
        )->setParameter('gender', $gender);

        return $query->getResult();
    }

    public function findBookByAuthor($author)
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT g, b, d, e
            FROM App\Entity\Group g
            INNER JOIN g.book b
            INNER JOIN g.gender d
            INNER JOIN g.editor e
            WHERE g.author = :author'
        )->setParameter('author', $author);

        return $query->getResult();
    }

    public function findBookByEditor($editor)
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT g, b, d, a
            FROM App\Entity\Group g
            INNER JOIN g.book b
            INNER JOIN g.gender d
            INNER JOIN g.author a
            WHERE g.editor = :editor'
        )->setParameter('editor', $editor);

        return $query->getResult();
    }

    public function findBook()
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT g, b, d, a, e
            FROM App\Entity\Group g
            INNER JOIN g.book b
            INNER JOIN g.gender d
            INNER JOIN g.author a
            INNER JOIN g.editor e
            ORDER BY g.book'
        );

        return $query->getResult();
    }

    public function findBookBySearch($search = null)
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT g, b, d, a, e
            FROM App\Entity\Group g
            INNER JOIN g.book b
            INNER JOIN g.gender d
            INNER JOIN g.author a
            INNER JOIN g.editor e
            WHERE b.title= :title'
        )->setParameter('title', $search)
        ;

        return $query->getResult();
    }

}
