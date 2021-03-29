<?php

namespace GraphQL\SchemaObject;

class HostedProUrlInputInputObject extends InputObject
{
    protected $cart_id;

    public function setCartId($cartId)
    {
        $this->cart_id = $cartId;

        return $this;
    }
}
