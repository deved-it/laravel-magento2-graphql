<?php


namespace Deved\Magento2Graphql\Queries;


final class Products extends AbstractQuery
{
    /** @var int - Magento Category ID */
    public $category;

    public function setQuery() : void
    {
        $category = $this->category;
        $products = <<<GQL
        {
          products(filter: {category_id: {eq: "$category" }}) {
            total_count
            items {
              name
              short_description {
                html
              }
              sku
              image {
                label,
                url
              }
              price_range {
                minimum_price {
                  regular_price {
                    value
                    currency
                  }
                  fixed_product_taxes {
                    amount {
                      value
                      currency
                    }
                    label
                  }
                }
              }
            }
          }
        }
        GQL;
        $this->query = $products;
    }
}
