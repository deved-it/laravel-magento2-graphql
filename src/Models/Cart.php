<?php


namespace Deved\Magento2Graphql\Models;

use Deved\Magento2Graphql\Magento2Graphql;
use GraphQL\Mutation;
use GraphQL\Query;
use GraphQL\RawObject;

final class Cart extends AbstractModel
{
    /** @var string */
    protected $cartId;

    /**
     * Cart constructor.
     * @param Magento2Graphql $gql
     * @param false $customer
     */
    public function __construct(Magento2Graphql $gql)
    {
        parent::__construct($gql);
    }

    /**
     * @return \GraphQL\Results
     */
    public function createEmptyCart()
    {
        $mutation = new Mutation('createEmptyCart');
        return $this->cartId = $this->gql->client->runQuery($mutation)->getData()->createEmptyCart;
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

    public function addSimpleProductsToCart($sku, $quantity = 1)
    {
        $mutation = (new Mutation('addSimpleProductsToCart'))
            ->setArguments(['input' => new RawObject(
                'cart_id: "' . $this->getCartId() . '"
                              cart_items: [
                                {
                                  data: {
                                    quantity: ' . $quantity . '
                                    sku: "' . $sku . '"
                                  }
                                }
                              ]'
            )])
            ->setSelectionSet([
                (new Query('cart'))
                ->setSelectionSet([
                    (new Query('items'))
                    ->setSelectionSet(['id', 'quantity', (new Query('product'))
                        ->setSelectionSet(['sku'])])
                ])
            ]);
    }
}
