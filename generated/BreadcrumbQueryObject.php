<?php

namespace GraphQL\SchemaObject;

class BreadcrumbQueryObject extends QueryObject
{
    const OBJECT_NAME = "Breadcrumb";

    public function selectCategoryId()
    {
        $this->selectField("category_id");

        return $this;
    }

    public function selectCategoryLevel()
    {
        $this->selectField("category_level");

        return $this;
    }

    public function selectCategoryName()
    {
        $this->selectField("category_name");

        return $this;
    }

    public function selectCategoryUrlKey()
    {
        $this->selectField("category_url_key");

        return $this;
    }

    public function selectCategoryUrlPath()
    {
        $this->selectField("category_url_path");

        return $this;
    }
}
