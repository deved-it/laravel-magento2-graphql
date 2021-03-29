<?php

namespace GraphQL\SchemaObject;

class SearchResultPageInfoQueryObject extends QueryObject
{
    const OBJECT_NAME = "SearchResultPageInfo";

    public function selectCurrentPage()
    {
        $this->selectField("current_page");

        return $this;
    }

    public function selectPageSize()
    {
        $this->selectField("page_size");

        return $this;
    }

    public function selectTotalPages()
    {
        $this->selectField("total_pages");

        return $this;
    }
}
