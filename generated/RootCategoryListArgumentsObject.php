<?php

namespace GraphQL\SchemaObject;

class RootCategoryListArgumentsObject extends ArgumentsObject
{
    protected $filters;

    public function setFilters(CategoryFilterInputInputObject $categoryFilterInputInputObject)
    {
        $this->filters = $categoryFilterInputInputObject;

        return $this;
    }
}
