<?php

namespace GraphQL\SchemaObject;

class RootCategoriesArgumentsObject extends ArgumentsObject
{
    protected $filters;
    protected $pageSize;
    protected $currentPage;

    public function setFilters(CategoryFilterInputInputObject $categoryFilterInputInputObject)
    {
        $this->filters = $categoryFilterInputInputObject;

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
}
