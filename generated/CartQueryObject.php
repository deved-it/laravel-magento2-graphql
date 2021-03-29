<?php

namespace GraphQL\SchemaObject;

class CartQueryObject extends QueryObject
{
    const OBJECT_NAME = "Cart";

    /**
     * @deprecated Use applied_coupons instead 
     */
    public function selectAppliedCoupon(CartAppliedCouponArgumentsObject $argsObject = null)
    {
        $object = new AppliedCouponQueryObject("applied_coupon");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAppliedCoupons(CartAppliedCouponsArgumentsObject $argsObject = null)
    {
        $object = new AppliedCouponQueryObject("applied_coupons");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAvailablePaymentMethods(CartAvailablePaymentMethodsArgumentsObject $argsObject = null)
    {
        $object = new AvailablePaymentMethodQueryObject("available_payment_methods");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBillingAddress(CartBillingAddressArgumentsObject $argsObject = null)
    {
        $object = new BillingCartAddressQueryObject("billing_address");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectEmail()
    {
        $this->selectField("email");

        return $this;
    }

    public function selectGiftMessage(CartGiftMessageArgumentsObject $argsObject = null)
    {
        $object = new GiftMessageQueryObject("gift_message");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectIsVirtual()
    {
        $this->selectField("is_virtual");

        return $this;
    }

    public function selectPrices(CartPricesArgumentsObject $argsObject = null)
    {
        $object = new CartPricesQueryObject("prices");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSelectedPaymentMethod(CartSelectedPaymentMethodArgumentsObject $argsObject = null)
    {
        $object = new SelectedPaymentMethodQueryObject("selected_payment_method");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShippingAddresses(CartShippingAddressesArgumentsObject $argsObject = null)
    {
        $object = new ShippingCartAddressQueryObject("shipping_addresses");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalQuantity()
    {
        $this->selectField("total_quantity");

        return $this;
    }
}
