<?php

namespace GraphQL\SchemaObject;

class CartTaxItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "CartTaxItem";

    public function selectAmount(CartTaxItemAmountArgumentsObject $argsObject = null)
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
