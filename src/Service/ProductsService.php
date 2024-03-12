<?php

namespace App\Service;

use App\Entity\Product;

class ProductsService
{

    public function getAllProduct()
    {
        return "Liste de produits :";
    }

    public function getProductById(int $id): string
    {
        return "Mon produit : {$id}";
    }

    public function createBottle(): Product
    {
        $bottle = new Product();
        $bottle->setName('Yams')->setPrice(13);
        return $bottle;
    }
}
