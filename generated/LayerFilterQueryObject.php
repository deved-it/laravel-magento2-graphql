<?php

namespace GraphQL\SchemaObject;

class LayerFilterQueryObject extends QueryObject
{
    const OBJECT_NAME = "LayerFilter";

    /**
     * @deprecated Use Aggregation.count instead.
     */
    public function selectFilterItemsCount()
    {
        $this->selectField("filter_items_count");

        return $this;
    }

    /**
     * @deprecated Use Aggregation.label instead.
     */
    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * @deprecated Use Aggregation.attribute_code instead.
     */
    public function selectRequestVar()
    {
        $this->selectField("request_var");

        return $this;
    }
}
