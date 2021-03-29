<?php

namespace GraphQL\SchemaObject;

class AggregationOptionQueryObject extends QueryObject
{
    const OBJECT_NAME = "AggregationOption";

    public function selectCount()
    {
        $this->selectField("count");

        return $this;
    }

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
