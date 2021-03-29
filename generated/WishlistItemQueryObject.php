<?php

namespace GraphQL\SchemaObject;

class WishlistItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "WishlistItem";

    public function selectAddedAt()
    {
        $this->selectField("added_at");

        return $this;
    }

    public function selectDescription()
    {
        $this->selectField("description");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectQty()
    {
        $this->selectField("qty");

        return $this;
    }
}
