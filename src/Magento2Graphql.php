<?php

namespace Deved\Magento2Graphql;

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
