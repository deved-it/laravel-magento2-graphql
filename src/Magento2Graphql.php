<?php

namespace Deved\Magento2Graphql;

/**
 * @method public Queryable products(array $params)
 *
 */

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
     * Magic method
     */
    public function __call($name, $arguments)
    {
        $queryClass = 'Deved\\Magento2Graphql\\Queries\\' . ucfirst($name);
        $params = [];
        if (isset($arguments[0]) && is_array($arguments[0])) {
            $params = $arguments[0];
        }
        $this->query($queryClass, $params);
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
        $products = new ProductRepository($this);
        return $products->executeQuery('products', ['category' => $catId]);
    }

    public function getCategories()
    {
        $categories = new CategoryRepository($this);
        return $categories->executeQuery('categories');
    }

    /**
     * @param $model
     * @param $query
     * @param array $params
     * @return Queryable
     */
    public function query($model, array $params = [])
    {
        /** @var Queryable $item */
        $item = new $model($this);
        return $item->executeQuery($params);
    }
}
