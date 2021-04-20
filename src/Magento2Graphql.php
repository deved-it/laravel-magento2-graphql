<?php

namespace Deved\Magento2Graphql;

/**
 * @method public Queryable products(array $params)
 *
 */


use GraphQL\Client;
use GraphQL\Query;
use GraphQL\RawObject;
use Psr\Http\Client\ClientInterface;

class Magento2Graphql
{

    /** @var Client */
    public $client;

    /**
     * Magento2Graphql constructor.
     *
     * @param array $config
     */
    public function __construct(ClientInterface $client = null)
    {
        if ($client) {
            $this->client = new Client('',[],[],$client);
        } else {
            $this->client = new Client(config('magento2-graphql.server'),[]);
        }
    }

    /**
     * Handle dynamic query calls.
     *
     * @param  string  $name
     * @param  array  $parameters
     * @return mixed
     */
    public function __call($name, $parameters)
    {
        if (class_exists('App\\Magento2Graphql\\Queries\\' . ucfirst($name))) {
            $queryClass = 'App\\Magento2Graphql\\Queries\\' . ucfirst($name);
        } else {
            $queryClass = 'Deved\\Magento2Graphql\\Queries\\' . ucfirst($name);
        }
        $params = [];
        if (isset($parameters[0]) && is_array($parameters[0])) {
            $params = $parameters[0];
        }
        return $this->query($queryClass, $params);
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
