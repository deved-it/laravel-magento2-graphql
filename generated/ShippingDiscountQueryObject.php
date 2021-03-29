<?php

namespace GraphQL\SchemaObject;

class ShippingDiscountQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShippingDiscount";

    public function selectAmount(ShippingDiscountAmountArgumentsObject $argsObject = null)
    {
        $object = new MoneyQueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
