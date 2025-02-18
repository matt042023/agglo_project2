<?php

namespace App\Repository;

use App\Entity\Messagings;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Messagings>
 *
 * @method Messagings|null find($id, $lockMode = null, $lockVersion = null)
 * @method Messagings|null findOneBy(array $criteria, array $orderBy = null)
 * @method Messagings[]    findAll()
 * @method Messagings[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MessagingsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Messagings::class);
    }
}
