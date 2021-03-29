<?php

namespace GraphQL\SchemaObject;

class CartItemQuantityQueryObject extends QueryObject
{
    const OBJECT_NAME = "CartItemQuantity";

    /**
     * @deprecated `cart_items` field of `ShippingCartAddress` returns now `CartItemInterface` instead of `CartItemQuantity`
     */
    public function selectCartItemId()
    {
        $this->selectField("cart_item_id");

        return $this;
    }

    /**
     * @deprecated `cart_items` field of `ShippingCartAddress` returns now `CartItemInterface` instead of `CartItemQuantity`
     */
    public function selectQuantity()
    {
        $this->selectField("quantity");

        return $this;
    }
}
