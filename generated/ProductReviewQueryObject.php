<?php

namespace GraphQL\SchemaObject;

class ProductReviewQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductReview";

    public function selectAverageRating()
    {
        $this->selectField("average_rating");

        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField("created_at");

        return $this;
    }

    public function selectNickname()
    {
        $this->selectField("nickname");

        return $this;
    }

    public function selectRatingsBreakdown(ProductReviewRatingsBreakdownArgumentsObject $argsObject = null)
    {
        $object = new ProductReviewRatingQueryObject("ratings_breakdown");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSummary()
    {
        $this->selectField("summary");

        return $this;
    }

    public function selectText()
    {
        $this->selectField("text");

        return $this;
    }
}
