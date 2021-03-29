<?php

namespace GraphQL\SchemaObject;

class PayflowLinkTokenInputInputObject extends InputObject
{
    protected $cart_id;

    public function setCartId($cartId)
    {
        $this->cart_id = $cartId;

        return $this;
    }
}
