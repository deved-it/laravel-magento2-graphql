<?php

namespace GraphQL\SchemaObject;

class SelectedPaymentMethodQueryObject extends QueryObject
{
    const OBJECT_NAME = "SelectedPaymentMethod";

    public function selectCode()
    {
        $this->selectField("code");

        return $this;
    }

    public function selectPurchaseOrderNumber()
    {
        $this->selectField("purchase_order_number");

        return $this;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }
}
