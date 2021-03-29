<?php

namespace GraphQL\SchemaObject;

class PickupLocationQueryObject extends QueryObject
{
    const OBJECT_NAME = "PickupLocation";

    public function selectCity()
    {
        $this->selectField("city");

        return $this;
    }

    public function selectContactName()
    {
        $this->selectField("contact_name");

        return $this;
    }

    public function selectCountryId()
    {
        $this->selectField("country_id");

        return $this;
    }

    public function selectDescription()
    {
        $this->selectField("description");

        return $this;
    }

    public function selectEmail()
    {
        $this->selectField("email");

        return $this;
    }

    public function selectFax()
    {
        $this->selectField("fax");

        return $this;
    }

    public function selectLatitude()
    {
        $this->selectField("latitude");

        return $this;
    }

    public function selectLongitude()
    {
        $this->selectField("longitude");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectPhone()
    {
        $this->selectField("phone");

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
}
