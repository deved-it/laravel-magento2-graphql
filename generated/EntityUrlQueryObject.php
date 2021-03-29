<?php

namespace GraphQL\SchemaObject;

class EntityUrlQueryObject extends QueryObject
{
    const OBJECT_NAME = "EntityUrl";

    /**
     * @deprecated The canonical_url field is deprecated, use relative_url instead.
     */
    public function selectCanonicalUrl()
    {
        $this->selectField("canonical_url");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectRedirectCode()
    {
        $this->selectField("redirectCode");

        return $this;
    }

    public function selectRelativeUrl()
    {
        $this->selectField("relative_url");

        return $this;
    }

    public function selectType()
    {
        $this->selectField("type");

        return $this;
    }
}
