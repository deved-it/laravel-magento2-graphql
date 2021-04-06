<?php


namespace Deved\Magento2Graphql\Models;

use Deved\Magento2Graphql\HasQuery;
use Deved\Magento2Graphql\Magento2Graphql;
use Exception;
use GraphQL\Mutation;
use GraphQL\Query;
use GraphQL\QueryBuilder\QueryBuilder;
use GraphQL\RawObject;
use GraphQL\Results;

final class Cart extends AbstractModel
{
    /** @var string */
    protected $cartId;

    /**
     * Cart constructor.
     * @param Magento2Graphql $gql
     * @param string $cartId
     */
    public function __construct(Magento2Graphql $gql, $cartId)
    {
        $this->cartId = $cartId;
        parent::__construct($gql);
        if (!$cartId) {
            $this->createEmptyCart();
        } else {
            $this->updateCart();
        }
    }

    /**
     * Create an empty cart
     *
     * @return string
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
     * Add simple product to the cart
     *
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
                $this->getCartQuery()
            ]);
        $this->content = $this->gql->client->runQuery($mutation, true)->getData();
        return $this;
    }

    /**
     * Update the cart
     *
     * @return $this
     */
    public function updateCart()
    {
        $this->content = $this->gql->client->runQuery($this->getCartQuery($this->cartId), true)->getData();
        return $this;
    }

    /**
     * Return the cart content query
     *
     * @param false|string $cartId
     * @return Query
     *
     */
    protected function getCartQuery($cartId = false)
    {
        $query = (new Query('cart'));
        if ($cartId) {
            $query->setArguments(['cart_id' => $cartId]);
        }
        return $query
            ->setSelectionSet(['id',
                (new Query('items'))
                    ->setSelectionSet(['id', 'quantity', (new Query('product'))
                        ->setSelectionSet(['sku', 'stock_status', (new Query('thumbnail'))
                            ->setSelectionSet(['url', 'label'])
                        ])
                    ])
            ]);
    }
}
