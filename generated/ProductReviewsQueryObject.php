<?php

namespace GraphQL\SchemaObject;

class ProductReviewsQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductReviews";

    public function selectItems(ProductReviewsItemsArgumentsObject $argsObject = null)
    {
        $object = new ProductReviewQueryObject("items");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ProductReviewsPageInfoArgumentsObject $argsObject = null)
    {
        $object = new SearchResultPageInfoQueryObject("page_info");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
