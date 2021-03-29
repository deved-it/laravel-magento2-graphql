<?php

namespace GraphQL\SchemaObject;

class SendFriendConfigurationQueryObject extends QueryObject
{
    const OBJECT_NAME = "SendFriendConfiguration";

    public function selectEnabledForCustomers()
    {
        $this->selectField("enabled_for_customers");

        return $this;
    }

    public function selectEnabledForGuests()
    {
        $this->selectField("enabled_for_guests");

        return $this;
    }
}
