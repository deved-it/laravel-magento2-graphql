<?php


namespace Deved\Magento2Graphql\Models;

use Deved\Magento2Graphql\Magento2Graphql;
use Exception;
use GraphQL\Mutation;
use GraphQL\Query;
use GraphQL\RawObject;
use GraphQL\Results;

final class Cart extends AbstractModel
{
    /** @var string */
    protected $cartId;
    /** @var  Results*/
    protected $cartContent;

    /**
     * Cart constructor.
     * @param Magento2Graphql $gql
     * @param string $cartId
     */
    public function __construct(Magento2Graphql $gql, $cartId)
    {
        $this->cartId = $cartId;
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

    /**
     * @param $sku
     * @param int $quantity
     * @return Cart
     */
    public function addSimpleProductsToCart($sku, int $quantity = 1): Cart
    {
        $mutation = (new Mutation('addSimpleProductsToCart'))
            ->setArguments(['input' => new RawObject(
                '{cart_id: "' . $this->getCartId() . '"
                              cart_items: [
                                {
                                  data: {
                                    quantity: ' . $quantity . '
                                    sku: "' . $sku . '"
                                  }
                                }
                              ]}'
            )])
            ->setSelectionSet([
                (new Query('cart'))
                ->setSelectionSet(['id',
                    (new Query('items'))
                    ->setSelectionSet(['id', 'quantity', (new Query('product'))
                        ->setSelectionSet(['sku', 'stock_status'])])
                ])
            ]);
        $this->cartContent = $this->gql->client->runQuery($mutation)->getResponseBody();
        return $this;
    }

    public function getContent()
    {
        return $this->cartContent;
    }

    public function serialize()
    {
        return $this->cartContent->getResponseBody();
    }

    public function unserialize($serialized)
    {
        $this->cartContent = $serialized;
    }
}
