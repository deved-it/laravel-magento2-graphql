<?php

namespace GraphQL\SchemaObject;

class CustomerAddressRegionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerAddressRegion";

    public function selectRegion()
    {
        $this->selectField("region");

        return $this;
    }

    public function selectRegionCode()
    {
        $this->selectField("region_code");

        return $this;
    }

    public function selectRegionId()
    {
        $this->selectField("region_id");

        return $this;
    }
}
