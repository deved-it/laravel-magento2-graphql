<?php

namespace GraphQL\SchemaObject;

class ProductsQueryObject extends QueryObject
{
    const OBJECT_NAME = "Products";

    public function selectAggregations(ProductsAggregationsArgumentsObject $argsObject = null)
    {
        $object = new AggregationQueryObject("aggregations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use aggregations instead
     */
    public function selectFilters(ProductsFiltersArgumentsObject $argsObject = null)
    {
        $object = new LayerFilterQueryObject("filters");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ProductsPageInfoArgumentsObject $argsObject = null)
    {
        $object = new SearchResultPageInfoQueryObject("page_info");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSortFields(ProductsSortFieldsArgumentsObject $argsObject = null)
    {
        $object = new SortFieldsQueryObject("sort_fields");
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
