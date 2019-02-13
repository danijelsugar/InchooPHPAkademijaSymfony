<?php
/**
 * Created by PhpStorm.
 * User: danijel
 * Date: 13.02.19.
 * Time: 19:15
 */

namespace App\Repository;

use App\Entity\PostTag;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class PostTagRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PostTag::class);
    }
}