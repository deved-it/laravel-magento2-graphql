<?php

namespace GraphQL\SchemaObject;

class DiscountQueryObject extends QueryObject
{
    const OBJECT_NAME = "Discount";

    public function selectAmount(DiscountAmountArgumentsObject $argsObject = null)
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
