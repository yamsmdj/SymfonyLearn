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


    public function createProduct(Test $test)
    {
        $product = new Test();
        $product->setName($test->getName());
        $product->setPrice($test->getPrice());


        $this->entityManager->persist($product);
        $this->entityManager->flush();
        return $product;
    }

    public function getAll(): array
    {
        return $this->entityManager->getRepository(Test::class)->findAll();
    }

    public function get(int $id): Test
    {
       return $this->entityManager->getRepository(Test::class)->find($id);
    }


}
