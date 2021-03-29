<?php

namespace GraphQL\SchemaObject;

class AggregationQueryObject extends QueryObject
{
    const OBJECT_NAME = "Aggregation";

    public function selectAttributeCode()
    {
        $this->selectField("attribute_code");

        return $this;
    }

    public function selectCount()
    {
        $this->selectField("count");

        return $this;
    }

    public function selectLabel()
    {
        $this->selectField("label");

        return $this;
    }

    public function selectOptions(AggregationOptionsArgumentsObject $argsObject = null)
    {
        $object = new AggregationOptionQueryObject("options");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
