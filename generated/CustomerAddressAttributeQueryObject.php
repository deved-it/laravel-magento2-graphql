<?php

namespace GraphQL\SchemaObject;

class CustomerAddressAttributeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerAddressAttribute";

    public function selectAttributeCode()
    {
        $this->selectField("attribute_code");

        return $this;
    }

    public function selectValue()
    {
        $this->selectField("value");

        return $this;
    }
}
