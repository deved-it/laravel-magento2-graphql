<?php


namespace Deved\Magento2Graphql\Queries;

class AddSimpleProductsToCart extends AbstractQuery
{
    /** @var string */
    public $cartId;
    /** @var integer */
    public $quantity;
    /** @var string */
    public $sku;

    public function setQuery(): void
    {
        $cartId = $this->cartId;
        $quantity = $this->quantity;
        $sku = $this->sku;

        $cart = <<<GQL
        mutation {
          addSimpleProductsToCart(input: {cart_id: "$cartId", cart_items: [{data: {quantity: $quantity, sku: "$sku"}}]}) {
            cart {
              id
              email
              total_quantity
              items {
                prices {
                  total_item_discount {
                    value
                  }
                  price {
                    value
                  }
                  discounts {
                    label
                    amount {
                      value
                    }
                  }
                }
                product {
                  name
                  sku
                }
                quantity
              }
              applied_coupons {
                code
              }
              prices {
                discounts {
                  amount {
                    value
                  }
                  label
                }
                grand_total {
                  value
                }
              }
            }
          }
        }
        GQL;
        $this->query = $cart;
    }
}
