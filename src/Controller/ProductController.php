<?php

namespace App\Controller;

use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductController extends AbstractController
{
    // #[Route('/product', name: 'app_product')]
    // public function new(EntityManagerInterface $entityManager): Response
    // {
    //     $product = new Product();
    //     $product->setName('Yams');
    //     $product->setPrice(26);
    //     $product->setImage('LeCheminDuBohneur');

    //     $entityManager->persist($product);
    //     $entityManager->flush();

    //     return new Response('Le nouveau produit est enregistré avec l\'id :' . $product->getId());
    // }
}
