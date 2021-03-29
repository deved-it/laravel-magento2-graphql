<?php

namespace GraphQL\SchemaObject;

class InvoiceQueryObject extends QueryObject
{
    const OBJECT_NAME = "Invoice";

    public function selectComments(InvoiceCommentsArgumentsObject $argsObject = null)
    {
        $object = new SalesCommentItemQueryObject("comments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectNumber()
    {
        $this->selectField("number");

        return $this;
    }

    public function selectTotal(InvoiceTotalArgumentsObject $argsObject = null)
    {
        $object = new InvoiceTotalQueryObject("total");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
