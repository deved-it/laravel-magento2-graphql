<?php

namespace GraphQL\SchemaObject;

class ProductReviewRatingMetadataQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductReviewRatingMetadata";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectValues(ProductReviewRatingMetadataValuesArgumentsObject $argsObject = null)
    {
        $object = new ProductReviewRatingValueMetadataQueryObject("values");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
