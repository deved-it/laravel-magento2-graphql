<?php

namespace GraphQL\SchemaObject;

class ProductReviewRatingValueMetadataQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductReviewRatingValueMetadata";

    public function selectValue()
    {
        $this->selectField("value");

        return $this;
    }

    public function selectValueId()
    {
        $this->selectField("value_id");

        return $this;
    }
}
