<?php

namespace GraphQL\SchemaObject;

class HostedProUrlQueryObject extends QueryObject
{
    const OBJECT_NAME = "HostedProUrl";

    public function selectSecureFormUrl()
    {
        $this->selectField("secure_form_url");

        return $this;
    }
}
