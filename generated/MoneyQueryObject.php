<?php

namespace GraphQL\SchemaObject;

class MoneyQueryObject extends QueryObject
{
    const OBJECT_NAME = "Money";

    public function selectCurrency()
    {
        $this->selectField("currency");

        return $this;
    }

    public function selectValue()
    {
        $this->selectField("value");

        return $this;
    }
}
