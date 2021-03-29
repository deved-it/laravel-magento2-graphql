<?php

namespace GraphQL\SchemaObject;

class RootQueryObject extends QueryObject
{
    const OBJECT_NAME = "";

    public function selectAvailableStores(RootAvailableStoresArgumentsObject $argsObject = null)
    {
        $object = new StoreConfigQueryObject("availableStores");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCart(RootCartArgumentsObject $argsObject = null)
    {
        $object = new CartQueryObject("cart");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCategories(RootCategoriesArgumentsObject $argsObject = null)
    {
        $object = new CategoryResultQueryObject("categories");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use 'categoryList' query instead of 'category' query
     */
    public function selectCategory(RootCategoryArgumentsObject $argsObject = null)
    {
        $object = new CategoryTreeQueryObject("category");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCategoryList(RootCategoryListArgumentsObject $argsObject = null)
    {
        $object = new CategoryTreeQueryObject("categoryList");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCheckoutAgreements(RootCheckoutAgreementsArgumentsObject $argsObject = null)
    {
        $object = new CheckoutAgreementQueryObject("checkoutAgreements");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCmsBlocks(RootCmsBlocksArgumentsObject $argsObject = null)
    {
        $object = new CmsBlocksQueryObject("cmsBlocks");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCmsPage(RootCmsPageArgumentsObject $argsObject = null)
    {
        $object = new CmsPageQueryObject("cmsPage");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCountries(RootCountriesArgumentsObject $argsObject = null)
    {
        $object = new CountryQueryObject("countries");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCountry(RootCountryArgumentsObject $argsObject = null)
    {
        $object = new CountryQueryObject("country");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCurrency(RootCurrencyArgumentsObject $argsObject = null)
    {
        $object = new CurrencyQueryObject("currency");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomAttributeMetadata(RootCustomAttributeMetadataArgumentsObject $argsObject = null)
    {
        $object = new CustomAttributeMetadataQueryObject("customAttributeMetadata");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomer(RootCustomerArgumentsObject $argsObject = null)
    {
        $object = new CustomerQueryObject("customer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomerCart(RootCustomerCartArgumentsObject $argsObject = null)
    {
        $object = new CartQueryObject("customerCart");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomerDownloadableProducts(RootCustomerDownloadableProductsArgumentsObject $argsObject = null)
    {
        $object = new CustomerDownloadableProductsQueryObject("customerDownloadableProducts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use orders from customer instead
     */
    public function selectCustomerOrders(RootCustomerOrdersArgumentsObject $argsObject = null)
    {
        $object = new CustomerOrdersQueryObject("customerOrders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomerPaymentTokens(RootCustomerPaymentTokensArgumentsObject $argsObject = null)
    {
        $object = new CustomerPaymentTokensQueryObject("customerPaymentTokens");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectGetHostedProUrl(RootGetHostedProUrlArgumentsObject $argsObject = null)
    {
        $object = new HostedProUrlQueryObject("getHostedProUrl");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectGetPayflowLinkToken(RootGetPayflowLinkTokenArgumentsObject $argsObject = null)
    {
        $object = new PayflowLinkTokenQueryObject("getPayflowLinkToken");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectIsEmailAvailable(RootIsEmailAvailableArgumentsObject $argsObject = null)
    {
        $object = new IsEmailAvailableOutputQueryObject("isEmailAvailable");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPickupLocations(RootPickupLocationsArgumentsObject $argsObject = null)
    {
        $object = new PickupLocationsQueryObject("pickupLocations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductReviewRatingsMetadata(RootProductReviewRatingsMetadataArgumentsObject $argsObject = null)
    {
        $object = new ProductReviewRatingsMetadataQueryObject("productReviewRatingsMetadata");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProducts(RootProductsArgumentsObject $argsObject = null)
    {
        $object = new ProductsQueryObject("products");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStoreConfig(RootStoreConfigArgumentsObject $argsObject = null)
    {
        $object = new StoreConfigQueryObject("storeConfig");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUrlResolver(RootUrlResolverArgumentsObject $argsObject = null)
    {
        $object = new EntityUrlQueryObject("urlResolver");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Moved under `Customer` `wishlist`
     */
    public function selectWishlist(RootWishlistArgumentsObject $argsObject = null)
    {
        $object = new WishlistOutputQueryObject("wishlist");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
