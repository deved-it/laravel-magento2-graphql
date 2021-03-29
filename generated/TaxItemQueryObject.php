<?php

namespace GraphQL\SchemaObject;

class TaxItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "TaxItem";

    public function selectAmount(TaxItemAmountArgumentsObject $argsObject = null)
    {
        $object = new MoneyQueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRate()
    {
        $this->selectField("rate");

        return $this;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }
}
