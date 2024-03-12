<?php

namespace App\Service;

use App\Entity\Test;
use Doctrine\ORM\EntityManagerInterface;

class TestService
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager; 
    }


    public function createProduct()
    {
        $product = new Test();
        $product->setName('Yams');
        $product->setPrice(26);


        $this->entityManager->persist($product);
        $this->entityManager->flush();
    }
}
