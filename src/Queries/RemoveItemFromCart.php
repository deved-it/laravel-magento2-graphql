<?php


namespace Deved\Magento2Graphql\Queries;


class RemoveItemFromCart extends AbstractQuery
{
    /** @var string */
    public $cart_id;
    /** @var int */
    public $cart_item_id;

    public function setQuery(): void
    {
        $query = <<<GQL
        mutation {
          removeItemFromCart(input: {cart_id: "$this->cart_id", cart_item_id: $this->cart_item_id}) {
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
        $this->query = $query;
    }
}
