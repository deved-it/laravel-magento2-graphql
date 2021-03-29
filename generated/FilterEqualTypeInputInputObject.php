<?php

namespace GraphQL\SchemaObject;

class FilterEqualTypeInputInputObject extends InputObject
{
    protected $eq;
    protected $in;

    public function setEq($eq)
    {
        $this->eq = $eq;

        return $this;
    }

    public function setIn(array $in)
    {
        $this->in = $in;

        return $this;
    }
}
