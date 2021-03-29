<?php

namespace GraphQL\SchemaObject;

class CartAddressRegionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CartAddressRegion";

    public function selectCode()
    {
        $this->selectField("code");

        return $this;
    }

    public function selectLabel()
    {
        $this->selectField("label");

        return $this;
    }

    public function selectRegionId()
    {
        $this->selectField("region_id");

        return $this;
    }
}
