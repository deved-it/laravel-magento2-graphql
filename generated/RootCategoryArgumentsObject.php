<?php

namespace GraphQL\SchemaObject;

class RootCategoryArgumentsObject extends ArgumentsObject
{
    protected $id;

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
