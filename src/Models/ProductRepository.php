<?php


namespace Deved\Magento2Graphql\Models;


use Deved\Magento2Graphql\HasQuery;

final class ProductRepository extends AbstractModel
{
    /** @var int - Magento Category ID */
    public $category;
    protected function setQueries()
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
