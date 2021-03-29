<?php

namespace GraphQL\SchemaObject;

class RootCmsPageArgumentsObject extends ArgumentsObject
{
    protected $id;
    protected $identifier;

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;

        return $this;
    }
}
