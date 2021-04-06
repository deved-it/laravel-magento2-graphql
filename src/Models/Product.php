<?php


namespace Deved\Magento2Graphql\Models;


use Deved\Magento2Graphql\HasQuery;
use Exception;

final class Product extends AbstractModel
{

    protected function setQueries()
    {
        $products = <<<GQL
        {
          products(filter: {category_id: {eq: "6"}}) {
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
                maximum_price {
                  regular_price {
                    value
                    currency
                  }
                }
              }
            }
          }
        }
        GQL;
        $this->query['products'] = $products;
    }
}
