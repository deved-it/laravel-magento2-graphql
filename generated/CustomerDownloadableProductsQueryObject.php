<?php

namespace GraphQL\SchemaObject;

class CustomerDownloadableProductsQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerDownloadableProducts";

    public function selectItems(CustomerDownloadableProductsItemsArgumentsObject $argsObject = null)
    {
        $object = new CustomerDownloadableProductQueryObject("items");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
