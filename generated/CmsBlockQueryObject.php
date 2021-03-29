<?php

namespace GraphQL\SchemaObject;

class CmsBlockQueryObject extends QueryObject
{
    const OBJECT_NAME = "CmsBlock";

    public function selectContent()
    {
        $this->selectField("content");

        return $this;
    }

    public function selectIdentifier()
    {
        $this->selectField("identifier");

        return $this;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }
}
