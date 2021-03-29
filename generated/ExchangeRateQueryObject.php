<?php

namespace GraphQL\SchemaObject;

class ExchangeRateQueryObject extends QueryObject
{
    const OBJECT_NAME = "ExchangeRate";

    public function selectCurrencyTo()
    {
        $this->selectField("currency_to");

        return $this;
    }

    public function selectRate()
    {
        $this->selectField("rate");

        return $this;
    }
}
