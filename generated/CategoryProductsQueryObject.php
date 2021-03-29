<?php

namespace GraphQL\SchemaObject;

class CategoryProductsQueryObject extends QueryObject
{
    const OBJECT_NAME = "CategoryProducts";

    public function selectPageInfo(CategoryProductsPageInfoArgumentsObject $argsObject = null)
    {
        $object = new SearchResultPageInfoQueryObject("page_info");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalCount()
    {
        $this->selectField("total_count");

        return $this;
    }
}
