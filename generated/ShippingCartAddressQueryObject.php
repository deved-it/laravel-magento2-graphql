<?php

namespace GraphQL\SchemaObject;

class ShippingCartAddressQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShippingCartAddress";

    public function selectAvailableShippingMethods(ShippingCartAddressAvailableShippingMethodsArgumentsObject $argsObject = null)
    {
        $object = new AvailableShippingMethodQueryObject("available_shipping_methods");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated `cart_items_v2` should be used instead
     */
    public function selectCartItems(ShippingCartAddressCartItemsArgumentsObject $argsObject = null)
    {
        $object = new CartItemQuantityQueryObject("cart_items");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCity()
    {
        $this->selectField("city");

        return $this;
    }

    public function selectCompany()
    {
        $this->selectField("company");

        return $this;
    }

    public function selectCountry(ShippingCartAddressCountryArgumentsObject $argsObject = null)
    {
        $object = new CartAddressCountryQueryObject("country");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomerNotes()
    {
        $this->selectField("customer_notes");

        return $this;
    }

    public function selectFirstname()
    {
        $this->selectField("firstname");

        return $this;
    }

    /**
     * @deprecated This information shoud not be exposed on frontend
     */
    public function selectItemsWeight()
    {
        $this->selectField("items_weight");

        return $this;
    }

    public function selectLastname()
    {
        $this->selectField("lastname");

        return $this;
    }

    public function selectPickupLocationCode()
    {
        $this->selectField("pickup_location_code");

        return $this;
    }

    public function selectPostcode()
    {
        $this->selectField("postcode");

        return $this;
    }

    public function selectRegion(ShippingCartAddressRegionArgumentsObject $argsObject = null)
    {
        $object = new CartAddressRegionQueryObject("region");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSelectedShippingMethod(ShippingCartAddressSelectedShippingMethodArgumentsObject $argsObject = null)
    {
        $object = new SelectedShippingMethodQueryObject("selected_shipping_method");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStreet()
    {
        $this->selectField("street");

        return $this;
    }

    public function selectTelephone()
    {
        $this->selectField("telephone");

        return $this;
    }
}
