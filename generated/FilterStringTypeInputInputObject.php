<?php

namespace GraphQL\SchemaObject;

class FilterStringTypeInputInputObject extends InputObject
{
    protected $eq;
    protected $in;
    protected $match;

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

    public function setMatch($match)
    {
        $this->match = $match;

        return $this;
    }
}
