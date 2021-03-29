<?php

namespace GraphQL\SchemaObject;

class SalesCommentItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "SalesCommentItem";

    public function selectMessage()
    {
        $this->selectField("message");

        return $this;
    }

    public function selectTimestamp()
    {
        $this->selectField("timestamp");

        return $this;
    }
}
