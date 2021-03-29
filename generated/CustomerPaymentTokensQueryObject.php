<?php

namespace GraphQL\SchemaObject;

class CustomerPaymentTokensQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerPaymentTokens";

    public function selectItems(CustomerPaymentTokensItemsArgumentsObject $argsObject = null)
    {
        $object = new PaymentTokenQueryObject("items");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
