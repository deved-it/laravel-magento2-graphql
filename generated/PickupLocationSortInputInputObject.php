<?php

namespace GraphQL\SchemaObject;

class PickupLocationSortInputInputObject extends InputObject
{
    protected $city;
    protected $contact_name;
    protected $country_id;
    protected $description;
    protected $distance;
    protected $email;
    protected $fax;
    protected $latitude;
    protected $longitude;
    protected $name;
    protected $phone;
    protected $pickup_location_code;
    protected $postcode;
    protected $region;
    protected $region_id;
    protected $street;

    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    public function setContactName($contactName)
    {
        $this->contact_name = $contactName;

        return $this;
    }

    public function setCountryId($countryId)
    {
        $this->country_id = $countryId;

        return $this;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function setDistance($distance)
    {
        $this->distance = $distance;

        return $this;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    public function setPickupLocationCode($pickupLocationCode)
    {
        $this->pickup_location_code = $pickupLocationCode;

        return $this;
    }

    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    public function setRegionId($regionId)
    {
        $this->region_id = $regionId;

        return $this;
    }

    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }
}
