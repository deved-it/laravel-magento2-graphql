<?php

namespace GraphQL\SchemaObject;

class CartAddressCountryQueryObject extends QueryObject
{
    const OBJECT_NAME = "CartAddressCountry";

    public function selectCode()
    {
        $this->selectField("code");

        return $this;
    }

    public function selectLabel()
    {
        $this->selectField("label");

        return $this;
    }
}
