<?php

namespace GraphQL\SchemaObject;

class RootProductsArgumentsObject extends ArgumentsObject
{
    protected $search;
    protected $filter;
    protected $pageSize;
    protected $currentPage;
    protected $sort;

    public function setSearch($search)
    {
        $this->search = $search;

        return $this;
    }

    public function setFilter(ProductAttributeFilterInputInputObject $productAttributeFilterInputInputObject)
    {
        $this->filter = $productAttributeFilterInputInputObject;

        return $this;
    }

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
