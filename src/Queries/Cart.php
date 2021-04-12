<?php


namespace Deved\Magento2Graphql\Queries;


final class Cart extends AbstractQuery
{
    /** @var string */
    public $cart_id;

    public function setQuery(): void
    {
        $cart_id = $this->cart_id;
        $cart = <<<GQL
        {
          cart(cart_id: "$cart_id") {
            email
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
        GQL;
        $this->query = $cart;
    }
}
