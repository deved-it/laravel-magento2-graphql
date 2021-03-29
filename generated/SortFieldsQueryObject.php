<?php

namespace GraphQL\SchemaObject;

class SortFieldsQueryObject extends QueryObject
{
    const OBJECT_NAME = "SortFields";

    public function selectDefault()
    {
        $this->selectField("default");

        return $this;
    }

    public function selectOptions(SortFieldsOptionsArgumentsObject $argsObject = null)
    {
        $object = new SortFieldQueryObject("options");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
