<?php

namespace GraphQL\SchemaObject;

class CartDiscountQueryObject extends QueryObject
{
    const OBJECT_NAME = "CartDiscount";

    public function selectAmount(CartDiscountAmountArgumentsObject $argsObject = null)
    {
        $object = new MoneyQueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLabel()
    {
        $this->selectField("label");

        return $this;
    }
}
