<?php

namespace GraphQL\SchemaObject;

class CategoryFilterInputInputObject extends InputObject
{
    protected $ids;
    protected $name;
    protected $url_key;
    protected $url_path;

    public function setIds(FilterEqualTypeInputInputObject $filterEqualTypeInputInputObject)
    {
        $this->ids = $filterEqualTypeInputInputObject;

        return $this;
    }

    public function setName(FilterMatchTypeInputInputObject $filterMatchTypeInputInputObject)
    {
        $this->name = $filterMatchTypeInputInputObject;

        return $this;
    }

    public function setUrlKey(FilterEqualTypeInputInputObject $filterEqualTypeInputInputObject)
    {
        $this->url_key = $filterEqualTypeInputInputObject;

        return $this;
    }

    public function setUrlPath(FilterEqualTypeInputInputObject $filterEqualTypeInputInputObject)
    {
        $this->url_path = $filterEqualTypeInputInputObject;

        return $this;
    }
}
