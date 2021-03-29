<?php

namespace GraphQL\SchemaObject;

class PickupLocationsQueryObject extends QueryObject
{
    const OBJECT_NAME = "PickupLocations";

    public function selectItems(PickupLocationsItemsArgumentsObject $argsObject = null)
    {
        $object = new PickupLocationQueryObject("items");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(PickupLocationsPageInfoArgumentsObject $argsObject = null)
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
