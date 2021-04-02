<?php


namespace Deved\Magento2Graphql\Models;


use Deved\Magento2Graphql\HasQuery;
use Exception;

final class Product extends AbstractModel
{

    public function setQueries()
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

    public function getQuery($name): string
    {
        return $this->query[$name];
    }

    public function executeQuery($name): HasQuery
    {
        $this->content = $this->gql->client->runRawQuery($this->getQuery($name), true)->getData();
        return $this;
    }
}
