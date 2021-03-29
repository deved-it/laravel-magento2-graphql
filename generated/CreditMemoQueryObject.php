<?php

namespace GraphQL\SchemaObject;

class CreditMemoQueryObject extends QueryObject
{
    const OBJECT_NAME = "CreditMemo";

    public function selectComments(CreditMemoCommentsArgumentsObject $argsObject = null)
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

    public function selectTotal(CreditMemoTotalArgumentsObject $argsObject = null)
    {
        $object = new CreditMemoTotalQueryObject("total");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
