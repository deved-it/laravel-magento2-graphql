<?php

namespace GraphQL\SchemaObject;

class ProductReviewRatingsMetadataQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductReviewRatingsMetadata";

    public function selectItems(ProductReviewRatingsMetadataItemsArgumentsObject $argsObject = null)
    {
        $object = new ProductReviewRatingMetadataQueryObject("items");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
