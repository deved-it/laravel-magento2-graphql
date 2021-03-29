<?php

namespace GraphQL\SchemaObject;

class RegionQueryObject extends QueryObject
{
    const OBJECT_NAME = "Region";

    public function selectCode()
    {
        $this->selectField("code");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }
}
