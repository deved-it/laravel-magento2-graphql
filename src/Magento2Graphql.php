<?php

namespace Deved\Magento2Graphql;

use Deved\Magento2Graphql\Models\Cart;
use Deved\Magento2Graphql\Models\Product;
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

    public function getProducts()
    {
        $product = new Product($this);
        return $product->executeQuery('products');
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
