<?php

namespace GraphQL\SchemaObject;

class CustomAttributeMetadataQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomAttributeMetadata";

    public function selectItems(CustomAttributeMetadataItemsArgumentsObject $argsObject = null)
    {
        $object = new AttributeQueryObject("items");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
