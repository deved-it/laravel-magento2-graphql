<?php


namespace Deved\Magento2Graphql\Models;


use Deved\Magento2Graphql\Magento2Graphql;

abstract class AbstractModel implements \Serializable
{
    /**
     * @var Magento2Graphql
     */
    public $gql;

    /**
     * AbstractModel constructor.
     * @param Magento2Graphql $gql
     */
    public function __construct(Magento2Graphql $gql)
    {
        $this->gql = $gql;
    }
}
