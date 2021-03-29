<?php

namespace GraphQL\SchemaObject;

class PickupLocationFilterInputInputObject extends InputObject
{
    protected $city;
    protected $country_id;
    protected $name;
    protected $pickup_location_code;
    protected $postcode;
    protected $region;
    protected $region_id;
    protected $street;

    public function setCity(FilterTypeInputInputObject $filterTypeInputInputObject)
    {
        $this->city = $filterTypeInputInputObject;

        return $this;
    }

    public function setCountryId(FilterTypeInputInputObject $filterTypeInputInputObject)
    {
        $this->country_id = $filterTypeInputInputObject;

        return $this;
    }

    public function setName(FilterTypeInputInputObject $filterTypeInputInputObject)
    {
        $this->name = $filterTypeInputInputObject;

        return $this;
    }

    public function setPickupLocationCode(FilterTypeInputInputObject $filterTypeInputInputObject)
    {
        $this->pickup_location_code = $filterTypeInputInputObject;

        return $this;
    }

    public function setPostcode(FilterTypeInputInputObject $filterTypeInputInputObject)
    {
        $this->postcode = $filterTypeInputInputObject;

        return $this;
    }

    public function setRegion(FilterTypeInputInputObject $filterTypeInputInputObject)
    {
        $this->region = $filterTypeInputInputObject;

        return $this;
    }

    public function setRegionId(FilterTypeInputInputObject $filterTypeInputInputObject)
    {
        $this->region_id = $filterTypeInputInputObject;

        return $this;
    }

    public function setStreet(FilterTypeInputInputObject $filterTypeInputInputObject)
    {
        $this->street = $filterTypeInputInputObject;

        return $this;
    }
}
