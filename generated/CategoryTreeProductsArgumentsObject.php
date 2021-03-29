<?php

namespace GraphQL\SchemaObject;

class CategoryTreeProductsArgumentsObject extends ArgumentsObject
{
    protected $pageSize;
    protected $currentPage;
    protected $sort;

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;

        return $this;
    }

    public function setCurrentPage($currentPage)
    {
        $this->currentPage = $currentPage;

        return $this;
    }

    public function setSort(ProductAttributeSortInputInputObject $productAttributeSortInputInputObject)
    {
        $this->sort = $productAttributeSortInputInputObject;

        return $this;
    }
}
