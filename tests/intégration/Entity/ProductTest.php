<?php

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class ProductTest extends KernelTestCase
{
    public function testFindAllProduct()
    {
        self::bootKernel([
                             'environment' => 'my_test_env',
                             'debug'       => false,
                         ]);

        $product = self::$kernel->getContainer()->get('test.' . Product::class);
    }
}
