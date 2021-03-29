<?php

namespace GraphQL\SchemaObject;

class RootCartArgumentsObject extends ArgumentsObject
{
    protected $cart_id;

    public function setCartId($cartId)
    {
        $this->cart_id = $cartId;

        return $this;
    }
}
