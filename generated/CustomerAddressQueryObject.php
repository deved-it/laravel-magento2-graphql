<?php

namespace GraphQL\SchemaObject;

class CustomerAddressQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerAddress";

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

    /**
     * @deprecated Use `country_code` instead.
     */
    public function selectCountryId()
    {
        $this->selectField("country_id");

        return $this;
    }

    /**
     * @deprecated Custom attributes should not be put into container
     */
    public function selectCustomAttributes(CustomerAddressCustomAttributesArgumentsObject $argsObject = null)
    {
        $object = new CustomerAddressAttributeQueryObject("custom_attributes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated customer_id is not needed as part of CustomerAddress, address ID (id) is unique identifier for the addresses.
     */
    public function selectCustomerId()
    {
        $this->selectField("customer_id");

        return $this;
    }

    public function selectDefaultBilling()
    {
        $this->selectField("default_billing");

        return $this;
    }

    public function selectDefaultShipping()
    {
        $this->selectField("default_shipping");

        return $this;
    }

    public function selectExtensionAttributes(CustomerAddressExtensionAttributesArgumentsObject $argsObject = null)
    {
        $object = new CustomerAddressAttributeQueryObject("extension_attributes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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

    public function selectId()
    {
        $this->selectField("id");

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

    public function selectRegion(CustomerAddressRegionArgumentsObject $argsObject = null)
    {
        $object = new CustomerAddressRegionQueryObject("region");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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
