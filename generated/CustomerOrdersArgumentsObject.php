<?php

namespace GraphQL\SchemaObject;

class CustomerOrdersArgumentsObject extends ArgumentsObject
{
    protected $filter;
    protected $currentPage;
    protected $pageSize;

    public function setFilter(CustomerOrdersFilterInputInputObject $customerOrdersFilterInputInputObject)
    {
        $this->filter = $customerOrdersFilterInputInputObject;

        return $this;
    }

    public function setCurrentPage($currentPage)
    {
        $this->currentPage = $currentPage;

        return $this;
    }

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;

        return $this;
    }
}
