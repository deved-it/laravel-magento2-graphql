<?php

namespace GraphQL\SchemaObject;

class CustomerOrdersFilterInputInputObject extends InputObject
{
    protected $number;

    public function setNumber(FilterStringTypeInputInputObject $filterStringTypeInputInputObject)
    {
        $this->number = $filterStringTypeInputInputObject;

        return $this;
    }
}
