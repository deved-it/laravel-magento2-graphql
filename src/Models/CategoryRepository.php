<?php


namespace Deved\Magento2Graphql\Models;


class CategoryRepository extends AbstractModel
{
    protected function setQueries()
    {
        $categories = <<<GQL
        {
          categoryList(
            filters: {

            }
          ) {
            children_count
            children {
              level
              name
              path
              url_path
              url_key
              children {
                level
                name
                path
                url_path
                url_key
              }
            }
          }
        }
        GQL;
        $this->query['categories'] = $categories;
    }
}
