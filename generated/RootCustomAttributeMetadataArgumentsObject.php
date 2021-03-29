<?php

namespace GraphQL\SchemaObject;

class RootCustomAttributeMetadataArgumentsObject extends ArgumentsObject
{
    protected $attributes;

    public function setAttributes(array $attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }
}
