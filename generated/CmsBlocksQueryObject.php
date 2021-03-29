<?php

namespace GraphQL\SchemaObject;

class CmsBlocksQueryObject extends QueryObject
{
    const OBJECT_NAME = "CmsBlocks";

    public function selectItems(CmsBlocksItemsArgumentsObject $argsObject = null)
    {
        $object = new CmsBlockQueryObject("items");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
