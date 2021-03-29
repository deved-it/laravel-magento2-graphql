<?php

namespace GraphQL\SchemaObject;

class AttributeInputInputObject extends InputObject
{
    protected $attribute_code;
    protected $entity_type;

    public function setAttributeCode($attributeCode)
    {
        $this->attribute_code = $attributeCode;

        return $this;
    }

    public function setEntityType($entityType)
    {
        $this->entity_type = $entityType;

        return $this;
    }
}
