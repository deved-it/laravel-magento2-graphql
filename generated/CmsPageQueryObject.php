<?php

namespace GraphQL\SchemaObject;

class CmsPageQueryObject extends QueryObject
{
    const OBJECT_NAME = "CmsPage";

    public function selectContent()
    {
        $this->selectField("content");

        return $this;
    }

    public function selectContentHeading()
    {
        $this->selectField("content_heading");

        return $this;
    }

    public function selectIdentifier()
    {
        $this->selectField("identifier");

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

    public function selectPageLayout()
    {
        $this->selectField("page_layout");

        return $this;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }

    public function selectUrlKey()
    {
        $this->selectField("url_key");

        return $this;
    }
}
