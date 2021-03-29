<?php

namespace GraphQL\SchemaObject;

class ProductAttributeFilterInputInputObject extends InputObject
{
    protected $category_id;
    protected $description;
    protected $name;
    protected $price;
    protected $short_description;
    protected $sku;
    protected $store_brand;
    protected $store_model;
    protected $store_year;
    protected $url_key;

    public function setCategoryId(FilterEqualTypeInputInputObject $filterEqualTypeInputInputObject)
    {
        $this->category_id = $filterEqualTypeInputInputObject;

        return $this;
    }

    public function setDescription(FilterMatchTypeInputInputObject $filterMatchTypeInputInputObject)
    {
        $this->description = $filterMatchTypeInputInputObject;

        return $this;
    }

    public function setName(FilterMatchTypeInputInputObject $filterMatchTypeInputInputObject)
    {
        $this->name = $filterMatchTypeInputInputObject;

        return $this;
    }

    public function setPrice(FilterRangeTypeInputInputObject $filterRangeTypeInputInputObject)
    {
        $this->price = $filterRangeTypeInputInputObject;

        return $this;
    }

    public function setShortDescription(FilterMatchTypeInputInputObject $filterMatchTypeInputInputObject)
    {
        $this->short_description = $filterMatchTypeInputInputObject;

        return $this;
    }

    public function setSku(FilterEqualTypeInputInputObject $filterEqualTypeInputInputObject)
    {
        $this->sku = $filterEqualTypeInputInputObject;

        return $this;
    }

    public function setStoreBrand(FilterEqualTypeInputInputObject $filterEqualTypeInputInputObject)
    {
        $this->store_brand = $filterEqualTypeInputInputObject;

        return $this;
    }

    public function setStoreModel(FilterEqualTypeInputInputObject $filterEqualTypeInputInputObject)
    {
        $this->store_model = $filterEqualTypeInputInputObject;

        return $this;
    }

    public function setStoreYear(FilterEqualTypeInputInputObject $filterEqualTypeInputInputObject)
    {
        $this->store_year = $filterEqualTypeInputInputObject;

        return $this;
    }

    public function setUrlKey(FilterEqualTypeInputInputObject $filterEqualTypeInputInputObject)
    {
        $this->url_key = $filterEqualTypeInputInputObject;

        return $this;
    }
}
