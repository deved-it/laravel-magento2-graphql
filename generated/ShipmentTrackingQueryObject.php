<?php

namespace GraphQL\SchemaObject;

class ShipmentTrackingQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShipmentTracking";

    public function selectCarrier()
    {
        $this->selectField("carrier");

        return $this;
    }

    public function selectNumber()
    {
        $this->selectField("number");

        return $this;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }
}
