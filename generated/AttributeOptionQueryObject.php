<?php

namespace GraphQL\SchemaObject;

class AttributeOptionQueryObject extends QueryObject
{
    const OBJECT_NAME = "AttributeOption";

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
