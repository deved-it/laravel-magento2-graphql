<?php

namespace GraphQL\SchemaObject;

class SortFieldQueryObject extends QueryObject
{
    const OBJECT_NAME = "SortField";

    public function selectLabel()
    {
        $this->selectField("label");

        return $this;
    }

    public function selectValue()
    {
        $this->selectField("value");

        return $this;
    }
}
