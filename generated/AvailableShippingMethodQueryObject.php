<?php

namespace GraphQL\SchemaObject;

class AvailableShippingMethodQueryObject extends QueryObject
{
    const OBJECT_NAME = "AvailableShippingMethod";

    public function selectAmount(AvailableShippingMethodAmountArgumentsObject $argsObject = null)
    {
        $object = new MoneyQueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAvailable()
    {
        $this->selectField("available");

        return $this;
    }

    /**
     * @deprecated The field should not be used on the storefront
     */
    public function selectBaseAmount(AvailableShippingMethodBaseAmountArgumentsObject $argsObject = null)
    {
        $object = new MoneyQueryObject("base_amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCarrierCode()
    {
        $this->selectField("carrier_code");

        return $this;
    }

    public function selectCarrierTitle()
    {
        $this->selectField("carrier_title");

        return $this;
    }

    public function selectErrorMessage()
    {
        $this->selectField("error_message");

        return $this;
    }

    public function selectMethodCode()
    {
        $this->selectField("method_code");

        return $this;
    }

    public function selectMethodTitle()
    {
        $this->selectField("method_title");

        return $this;
    }

    public function selectPriceExclTax(AvailableShippingMethodPriceExclTaxArgumentsObject $argsObject = null)
    {
        $object = new MoneyQueryObject("price_excl_tax");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPriceInclTax(AvailableShippingMethodPriceInclTaxArgumentsObject $argsObject = null)
    {
        $object = new MoneyQueryObject("price_incl_tax");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
