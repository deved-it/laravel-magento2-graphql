<?php

namespace GraphQL\SchemaObject;

class StoreConfigQueryObject extends QueryObject
{
    const OBJECT_NAME = "StoreConfig";

    public function selectAbsoluteFooter()
    {
        $this->selectField("absolute_footer");

        return $this;
    }

    public function selectAllowGuestsToWriteProductReviews()
    {
        $this->selectField("allow_guests_to_write_product_reviews");

        return $this;
    }

    public function selectAllowItems()
    {
        $this->selectField("allow_items");

        return $this;
    }

    public function selectAllowOrder()
    {
        $this->selectField("allow_order");

        return $this;
    }

    public function selectAutocompleteOnStorefront()
    {
        $this->selectField("autocomplete_on_storefront");

        return $this;
    }

    public function selectBaseCurrencyCode()
    {
        $this->selectField("base_currency_code");

        return $this;
    }

    public function selectBaseLinkUrl()
    {
        $this->selectField("base_link_url");

        return $this;
    }

    public function selectBaseMediaUrl()
    {
        $this->selectField("base_media_url");

        return $this;
    }

    public function selectBaseStaticUrl()
    {
        $this->selectField("base_static_url");

        return $this;
    }

    public function selectBaseUrl()
    {
        $this->selectField("base_url");

        return $this;
    }

    public function selectCatalogDefaultSortBy()
    {
        $this->selectField("catalog_default_sort_by");

        return $this;
    }

    public function selectCategoryFixedProductTaxDisplaySetting()
    {
        $this->selectField("category_fixed_product_tax_display_setting");

        return $this;
    }

    public function selectCategoryUrlSuffix()
    {
        $this->selectField("category_url_suffix");

        return $this;
    }

    public function selectCmsHomePage()
    {
        $this->selectField("cms_home_page");

        return $this;
    }

    public function selectCmsNoCookies()
    {
        $this->selectField("cms_no_cookies");

        return $this;
    }

    public function selectCmsNoRoute()
    {
        $this->selectField("cms_no_route");

        return $this;
    }

    public function selectCode()
    {
        $this->selectField("code");

        return $this;
    }

    public function selectCopyright()
    {
        $this->selectField("copyright");

        return $this;
    }

    public function selectDefaultDescription()
    {
        $this->selectField("default_description");

        return $this;
    }

    public function selectDefaultDisplayCurrencyCode()
    {
        $this->selectField("default_display_currency_code");

        return $this;
    }

    public function selectDefaultKeywords()
    {
        $this->selectField("default_keywords");

        return $this;
    }

    public function selectDefaultTitle()
    {
        $this->selectField("default_title");

        return $this;
    }

    public function selectDemonotice()
    {
        $this->selectField("demonotice");

        return $this;
    }

    public function selectFront()
    {
        $this->selectField("front");

        return $this;
    }

    public function selectGridPerPage()
    {
        $this->selectField("grid_per_page");

        return $this;
    }

    public function selectGridPerPageValues()
    {
        $this->selectField("grid_per_page_values");

        return $this;
    }

    public function selectHeadIncludes()
    {
        $this->selectField("head_includes");

        return $this;
    }

    public function selectHeadShortcutIcon()
    {
        $this->selectField("head_shortcut_icon");

        return $this;
    }

    public function selectHeaderLogoSrc()
    {
        $this->selectField("header_logo_src");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectListMode()
    {
        $this->selectField("list_mode");

        return $this;
    }

    public function selectListPerPage()
    {
        $this->selectField("list_per_page");

        return $this;
    }

    public function selectListPerPageValues()
    {
        $this->selectField("list_per_page_values");

        return $this;
    }

    public function selectLocale()
    {
        $this->selectField("locale");

        return $this;
    }

    public function selectLogoAlt()
    {
        $this->selectField("logo_alt");

        return $this;
    }

    public function selectLogoHeight()
    {
        $this->selectField("logo_height");

        return $this;
    }

    public function selectLogoWidth()
    {
        $this->selectField("logo_width");

        return $this;
    }

    public function selectMagentoWishlistGeneralIsEnabled()
    {
        $this->selectField("magento_wishlist_general_is_enabled");

        return $this;
    }

    public function selectMinimumPasswordLength()
    {
        $this->selectField("minimum_password_length");

        return $this;
    }

    public function selectNoRoute()
    {
        $this->selectField("no_route");

        return $this;
    }

    public function selectPaymentPayflowproCcVaultActive()
    {
        $this->selectField("payment_payflowpro_cc_vault_active");

        return $this;
    }

    public function selectProductFixedProductTaxDisplaySetting()
    {
        $this->selectField("product_fixed_product_tax_display_setting");

        return $this;
    }

    public function selectProductReviewsEnabled()
    {
        $this->selectField("product_reviews_enabled");

        return $this;
    }

    public function selectProductUrlSuffix()
    {
        $this->selectField("product_url_suffix");

        return $this;
    }

    public function selectRequiredCharacterClassesNumber()
    {
        $this->selectField("required_character_classes_number");

        return $this;
    }

    public function selectRootCategoryId()
    {
        $this->selectField("root_category_id");

        return $this;
    }

    public function selectSalesFixedProductTaxDisplaySetting()
    {
        $this->selectField("sales_fixed_product_tax_display_setting");

        return $this;
    }

    public function selectSecureBaseLinkUrl()
    {
        $this->selectField("secure_base_link_url");

        return $this;
    }

    public function selectSecureBaseMediaUrl()
    {
        $this->selectField("secure_base_media_url");

        return $this;
    }

    public function selectSecureBaseStaticUrl()
    {
        $this->selectField("secure_base_static_url");

        return $this;
    }

    public function selectSecureBaseUrl()
    {
        $this->selectField("secure_base_url");

        return $this;
    }

    public function selectSendFriend(StoreConfigSendFriendArgumentsObject $argsObject = null)
    {
        $object = new SendFriendConfigurationQueryObject("send_friend");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShowCmsBreadcrumbs()
    {
        $this->selectField("show_cms_breadcrumbs");

        return $this;
    }

    public function selectStoreName()
    {
        $this->selectField("store_name");

        return $this;
    }

    public function selectTimezone()
    {
        $this->selectField("timezone");

        return $this;
    }

    public function selectTitlePrefix()
    {
        $this->selectField("title_prefix");

        return $this;
    }

    public function selectTitleSeparator()
    {
        $this->selectField("title_separator");

        return $this;
    }

    public function selectTitleSuffix()
    {
        $this->selectField("title_suffix");

        return $this;
    }

    public function selectWebsiteId()
    {
        $this->selectField("website_id");

        return $this;
    }

    public function selectWeightUnit()
    {
        $this->selectField("weight_unit");

        return $this;
    }

    public function selectWelcome()
    {
        $this->selectField("welcome");

        return $this;
    }
}
