<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $product = new Product();
        $product->setName('Keyboard');
        $product->setDescription('Ergonomic and stylish!');
        $product->setSize(100);
        $manager->persist($product);

        $product = new Product();
        $product->setName('Monitor');
        $product->setDescription('4K, 21-inch');
        $product->setSize(100);
        $manager->persist($product);

        $manager->flush();
    }
}
