<?php

namespace GraphQL\SchemaObject;

class PayflowLinkTokenQueryObject extends QueryObject
{
    const OBJECT_NAME = "PayflowLinkToken";

    public function selectMode()
    {
        $this->selectField("mode");

        return $this;
    }

    public function selectPaypalUrl()
    {
        $this->selectField("paypal_url");

        return $this;
    }

    public function selectSecureToken()
    {
        $this->selectField("secure_token");

        return $this;
    }

    public function selectSecureTokenId()
    {
        $this->selectField("secure_token_id");

        return $this;
    }
}
