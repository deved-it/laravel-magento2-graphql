<?php


namespace Deved\Magento2Graphql\Models;

use Deved\Magento2Graphql\Magento2Graphql;
use GraphQL\Mutation;

final class Cart extends AbstractModel
{
    /** @var string */
    protected $cartId;

    /**
     * Cart constructor.
     * @param Magento2Graphql $gql
     * @param false $customer
     */
    public function __construct(Magento2Graphql $gql, $customer = false)
    {
        parent::__construct($gql);
        if (!$customer) {
            $this->cartId = $this->createEmptyCart()->getData()->createEmptyCart;
        }
    }

    /**
     * @return \GraphQL\Results
     */
    protected function createEmptyCart()
    {
        $mutation = new Mutation('createEmptyCart');
        return $this->gql->client->runQuery($mutation);
    }

    /**
     * Get Cart ID
     *
     * @return mixed|string
     */
    public function getCartId()
    {
        return $this->cartId;
    }
}
