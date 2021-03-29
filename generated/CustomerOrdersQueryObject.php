<?php

namespace GraphQL\SchemaObject;

class CustomerOrdersQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerOrders";

    public function selectItems(CustomerOrdersItemsArgumentsObject $argsObject = null)
    {
        $object = new CustomerOrderQueryObject("items");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(CustomerOrdersPageInfoArgumentsObject $argsObject = null)
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
