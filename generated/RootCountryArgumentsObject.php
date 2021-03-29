<?php

namespace GraphQL\SchemaObject;

class RootCountryArgumentsObject extends ArgumentsObject
{
    protected $id;

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
