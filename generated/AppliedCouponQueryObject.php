<?php

namespace GraphQL\SchemaObject;

class AppliedCouponQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppliedCoupon";

    public function selectCode()
    {
        $this->selectField("code");

        return $this;
    }
}
