<?php

namespace GraphQL\SchemaObject;

class GiftMessageQueryObject extends QueryObject
{
    const OBJECT_NAME = "GiftMessage";

    public function selectFrom()
    {
        $this->selectField("from");

        return $this;
    }

    public function selectMessage()
    {
        $this->selectField("message");

        return $this;
    }

    public function selectTo()
    {
        $this->selectField("to");

        return $this;
    }
}
