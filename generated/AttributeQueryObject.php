<?php

namespace GraphQL\SchemaObject;

class AttributeQueryObject extends QueryObject
{
    const OBJECT_NAME = "Attribute";

    public function selectAttributeCode()
    {
        $this->selectField("attribute_code");

        return $this;
    }

    public function selectAttributeOptions(AttributeAttributeOptionsArgumentsObject $argsObject = null)
    {
        $object = new AttributeOptionQueryObject("attribute_options");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAttributeType()
    {
        $this->selectField("attribute_type");

        return $this;
    }

    public function selectEntityType()
    {
        $this->selectField("entity_type");

        return $this;
    }

    public function selectInputType()
    {
        $this->selectField("input_type");

        return $this;
    }
}
