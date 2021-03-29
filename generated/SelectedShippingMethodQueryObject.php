<?php

namespace GraphQL\SchemaObject;

class SelectedShippingMethodQueryObject extends QueryObject
{
    const OBJECT_NAME = "SelectedShippingMethod";

    public function selectAmount(SelectedShippingMethodAmountArgumentsObject $argsObject = null)
    {
        $object = new MoneyQueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated The field should not be used on the storefront
     */
    public function selectBaseAmount(SelectedShippingMethodBaseAmountArgumentsObject $argsObject = null)
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
}
