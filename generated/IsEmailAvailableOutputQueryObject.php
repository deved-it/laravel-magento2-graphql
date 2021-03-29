<?php

namespace GraphQL\SchemaObject;

class IsEmailAvailableOutputQueryObject extends QueryObject
{
    const OBJECT_NAME = "IsEmailAvailableOutput";

    public function selectIsEmailAvailable()
    {
        $this->selectField("is_email_available");

        return $this;
    }
}
