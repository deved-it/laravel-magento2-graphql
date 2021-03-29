<?php

namespace GraphQL\SchemaObject;

class FilterMatchTypeInputInputObject extends InputObject
{
    protected $match;

    public function setMatch($match)
    {
        $this->match = $match;

        return $this;
    }
}
