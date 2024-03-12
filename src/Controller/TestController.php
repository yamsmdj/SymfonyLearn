<?php

namespace App\Controller;

use App\Entity\Test;
use App\Service\TestService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;

class ProductController extends AbstractController
{

    private SerializerInterface $serializer;
    private TestService $testService;

    public function __construct(SerializerInterface $serializer, EntityManagerInterface $entityManager)
    {
        $this->testService = new TestService($entityManager);
        $this->serializer = $serializer;
    }


    #[Route('api/product', name: 'create_product', methods: ['POST'])]

    public function new(): Response
    {
        return new Response($this->serializer->serialize($this->testService->createProduct(), 'json'));
    }
}
