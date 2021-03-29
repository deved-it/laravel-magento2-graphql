<?php

namespace GraphQL\SchemaObject;

class BillingCartAddressQueryObject extends QueryObject
{
    const OBJECT_NAME = "BillingCartAddress";

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

    public function selectCountry(BillingCartAddressCountryArgumentsObject $argsObject = null)
    {
        $object = new CartAddressCountryQueryObject("country");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated The field is used only in shipping address
     */
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

    public function selectLastname()
    {
        $this->selectField("lastname");

        return $this;
    }

    public function selectPostcode()
    {
        $this->selectField("postcode");

        return $this;
    }

    public function selectRegion(BillingCartAddressRegionArgumentsObject $argsObject = null)
    {
        $object = new CartAddressRegionQueryObject("region");
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
