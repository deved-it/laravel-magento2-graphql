<?php

namespace GraphQL\SchemaObject;

class CustomerQueryObject extends QueryObject
{
    const OBJECT_NAME = "Customer";

    public function selectAddresses(CustomerAddressesArgumentsObject $argsObject = null)
    {
        $object = new CustomerAddressQueryObject("addresses");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCreatedAt()
    {
        $this->selectField("created_at");

        return $this;
    }

    public function selectDateOfBirth()
    {
        $this->selectField("date_of_birth");

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

    /**
     * @deprecated Use `date_of_birth` instead
     */
    public function selectDob()
    {
        $this->selectField("dob");

        return $this;
    }

    public function selectEmail()
    {
        $this->selectField("email");

        return $this;
    }

    public function selectFirstname()
    {
        $this->selectField("firstname");

        return $this;
    }

    public function selectGender()
    {
        $this->selectField("gender");

        return $this;
    }

    /**
     * @deprecated Customer group should not be exposed in the storefront scenarios
     */
    public function selectGroupId()
    {
        $this->selectField("group_id");

        return $this;
    }

    /**
     * @deprecated id is not needed as part of Customer because on server side it can be identified based on customer token used for authentication. There is no need to know customer ID on the client side.
     */
    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectIsSubscribed()
    {
        $this->selectField("is_subscribed");

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

    public function selectOrders(CustomerOrdersArgumentsObject $argsObject = null)
    {
        $object = new CustomerOrdersQueryObject("orders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPrefix()
    {
        $this->selectField("prefix");

        return $this;
    }

    public function selectReviews(CustomerReviewsArgumentsObject $argsObject = null)
    {
        $object = new ProductReviewsQueryObject("reviews");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSuffix()
    {
        $this->selectField("suffix");

        return $this;
    }

    public function selectTaxvat()
    {
        $this->selectField("taxvat");

        return $this;
    }

    public function selectWishlist(CustomerWishlistArgumentsObject $argsObject = null)
    {
        $object = new WishlistQueryObject("wishlist");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
