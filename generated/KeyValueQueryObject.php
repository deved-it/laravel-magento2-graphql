<?php

namespace GraphQL\SchemaObject;

class KeyValueQueryObject extends QueryObject
{
    const OBJECT_NAME = "KeyValue";

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectValue()
    {
        $this->selectField("value");

        return $this;
    }
}
