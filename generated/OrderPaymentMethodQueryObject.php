<?php

namespace GraphQL\SchemaObject;

class OrderPaymentMethodQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderPaymentMethod";

    public function selectAdditionalData(OrderPaymentMethodAdditionalDataArgumentsObject $argsObject = null)
    {
        $object = new KeyValueQueryObject("additional_data");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectType()
    {
        $this->selectField("type");

        return $this;
    }
}
