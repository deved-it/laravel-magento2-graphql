<?php

namespace GraphQL\SchemaObject;

class CustomerReviewsArgumentsObject extends ArgumentsObject
{
    protected $pageSize;
    protected $currentPage;

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
