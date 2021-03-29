<?php

namespace GraphQL\SchemaObject;

class CategoryTreeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CategoryTree";

    public function selectAvailableSortBy()
    {
        $this->selectField("available_sort_by");

        return $this;
    }

    public function selectBreadcrumbs(CategoryTreeBreadcrumbsArgumentsObject $argsObject = null)
    {
        $object = new BreadcrumbQueryObject("breadcrumbs");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCanonicalUrl()
    {
        $this->selectField("canonical_url");

        return $this;
    }

    public function selectChildren(CategoryTreeChildrenArgumentsObject $argsObject = null)
    {
        $object = new CategoryTreeQueryObject("children");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectChildrenCount()
    {
        $this->selectField("children_count");

        return $this;
    }

    public function selectCmsBlock(CategoryTreeCmsBlockArgumentsObject $argsObject = null)
    {
        $object = new CmsBlockQueryObject("cms_block");
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

    public function selectCustomLayoutUpdateFile()
    {
        $this->selectField("custom_layout_update_file");

        return $this;
    }

    public function selectDefaultSortBy()
    {
        $this->selectField("default_sort_by");

        return $this;
    }

    public function selectDescription()
    {
        $this->selectField("description");

        return $this;
    }

    public function selectDisplayMode()
    {
        $this->selectField("display_mode");

        return $this;
    }

    public function selectFilterPriceRange()
    {
        $this->selectField("filter_price_range");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectImage()
    {
        $this->selectField("image");

        return $this;
    }

    public function selectIncludeInMenu()
    {
        $this->selectField("include_in_menu");

        return $this;
    }

    public function selectIsAnchor()
    {
        $this->selectField("is_anchor");

        return $this;
    }

    public function selectLandingPage()
    {
        $this->selectField("landing_page");

        return $this;
    }

    public function selectLevel()
    {
        $this->selectField("level");

        return $this;
    }

    public function selectMetaDescription()
    {
        $this->selectField("meta_description");

        return $this;
    }

    public function selectMetaKeywords()
    {
        $this->selectField("meta_keywords");

        return $this;
    }

    public function selectMetaTitle()
    {
        $this->selectField("meta_title");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectPath()
    {
        $this->selectField("path");

        return $this;
    }

    public function selectPathInStore()
    {
        $this->selectField("path_in_store");

        return $this;
    }

    public function selectPosition()
    {
        $this->selectField("position");

        return $this;
    }

    public function selectProductCount()
    {
        $this->selectField("product_count");

        return $this;
    }

    public function selectProducts(CategoryTreeProductsArgumentsObject $argsObject = null)
    {
        $object = new CategoryProductsQueryObject("products");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUpdatedAt()
    {
        $this->selectField("updated_at");

        return $this;
    }

    public function selectUrlKey()
    {
        $this->selectField("url_key");

        return $this;
    }

    public function selectUrlPath()
    {
        $this->selectField("url_path");

        return $this;
    }

    public function selectUrlSuffix()
    {
        $this->selectField("url_suffix");

        return $this;
    }
}
