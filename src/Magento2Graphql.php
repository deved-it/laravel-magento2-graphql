<?php

namespace Deved\Magento2Graphql;

use Deved\Magento2Graphql\Models\Cart;
use Deved\Magento2Graphql\Models\CategoryRepository;
use Deved\Magento2Graphql\Models\Product;
use Deved\Magento2Graphql\Models\ProductRepository;
use GraphQL\Client;
use GraphQL\Query;
use GraphQL\RawObject;

class Magento2Graphql
{

    /** @var Client */
    public $client;

    /**
     * Magento2Graphql constructor.
     * @param array $config
     */
    public function __construct()
    {
        $this->client = new Client(config('magento2-graphql.server'),[]);
    }

    /**
     * Get the Cart
     * @param false|string $cartId
     * @return Cart
     */
    public function getCart($cartId = false)
    {
        return new Cart($this, $cartId);
    }

    /**
     * @param int $catId
     * @return HasQuery
     */
    public function getProducts($catId)
    {
        $product = new ProductRepository($this);
        return $product->executeQuery('products', ['category' => $catId]);
    }

    public function getCategories()
    {
        $categories = new CategoryRepository($this);
        return $categories->executeQuery('categories');
    }

    /**
     * @return Query
     */
    public function productsQuery()
    {
        return (new Query('products'))
            ->setArguments(['filter' => new RawObject('{category_id: {eq: "6"}}')])
            ->setSelectionSet(
                [
                    'total_count',
                    (new Query('items'))
                    ->setSelectionSet([
                        'name'
                    ])
                ]
            );
    }
}
