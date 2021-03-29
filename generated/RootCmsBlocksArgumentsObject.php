<?php

namespace GraphQL\SchemaObject;

class RootCmsBlocksArgumentsObject extends ArgumentsObject
{
    protected $identifiers;

    public function setIdentifiers(array $identifiers)
    {
        $this->identifiers = $identifiers;

        return $this;
    }
}
