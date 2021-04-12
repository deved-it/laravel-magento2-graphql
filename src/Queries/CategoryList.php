<?php


namespace Deved\Magento2Graphql\Queries;


final class CategoryList extends AbstractQuery
{

    public function setQuery(): void
    {
        $this->query = <<<GQL
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
    }
}
