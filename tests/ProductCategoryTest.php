<?php

namespace RigorTalks\tests;

use PHPUnit\Framework\TestCase;
use RigorTalks\Testing\CreationMethods\ProductCategory\Product;

class ProductCategoryTest extends TestCase
{

    public function test_filter_products_by_full_text_search()
    {
        $products = [
            new Product('shirt', 'clothes'),
            new Product('jeans', 'clothes'),
            new Product('cup','household')
        ];

        $filteredProducts = $this->filterProductsList($products);

        $this->assertCount(2, $filteredProducts);
    }

    /**
     * @param array $products
     * @return array
     */
    public function filterProductsList(array $products){
        return array_filter($products, function (Product $product){
            return $product->getCategoryName() == 'clothes';
        });
    }
}