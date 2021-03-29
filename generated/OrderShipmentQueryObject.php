<?php

namespace GraphQL\SchemaObject;

class OrderShipmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderShipment";

    public function selectComments(OrderShipmentCommentsArgumentsObject $argsObject = null)
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

    public function selectTracking(OrderShipmentTrackingArgumentsObject $argsObject = null)
    {
        $object = new ShipmentTrackingQueryObject("tracking");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
