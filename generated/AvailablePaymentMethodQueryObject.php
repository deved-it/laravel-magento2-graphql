<?php

namespace GraphQL\SchemaObject;

class AvailablePaymentMethodQueryObject extends QueryObject
{
    const OBJECT_NAME = "AvailablePaymentMethod";

    public function selectCode()
    {
        $this->selectField("code");

        return $this;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }
}
