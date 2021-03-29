<?php

namespace GraphQL\SchemaObject;

class PaymentTokenQueryObject extends QueryObject
{
    const OBJECT_NAME = "PaymentToken";

    public function selectDetails()
    {
        $this->selectField("details");

        return $this;
    }

    public function selectPaymentMethodCode()
    {
        $this->selectField("payment_method_code");

        return $this;
    }

    public function selectPublicHash()
    {
        $this->selectField("public_hash");

        return $this;
    }

    public function selectType()
    {
        $this->selectField("type");

        return $this;
    }
}
