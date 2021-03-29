<?php

namespace GraphQL\SchemaObject;

class OrderAddressQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderAddress";

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

    public function selectCountryCode()
    {
        $this->selectField("country_code");

        return $this;
    }

    public function selectFax()
    {
        $this->selectField("fax");

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

    public function selectMiddlename()
    {
        $this->selectField("middlename");

        return $this;
    }

    public function selectPostcode()
    {
        $this->selectField("postcode");

        return $this;
    }

    public function selectPrefix()
    {
        $this->selectField("prefix");

        return $this;
    }

    public function selectRegion()
    {
        $this->selectField("region");

        return $this;
    }

    public function selectRegionId()
    {
        $this->selectField("region_id");

        return $this;
    }

    public function selectStreet()
    {
        $this->selectField("street");

        return $this;
    }

    public function selectSuffix()
    {
        $this->selectField("suffix");

        return $this;
    }

    public function selectTelephone()
    {
        $this->selectField("telephone");

        return $this;
    }

    public function selectVatId()
    {
        $this->selectField("vat_id");

        return $this;
    }
}
