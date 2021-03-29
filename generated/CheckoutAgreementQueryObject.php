<?php

namespace GraphQL\SchemaObject;

class CheckoutAgreementQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAgreement";

    public function selectAgreementId()
    {
        $this->selectField("agreement_id");

        return $this;
    }

    public function selectCheckboxText()
    {
        $this->selectField("checkbox_text");

        return $this;
    }

    public function selectContent()
    {
        $this->selectField("content");

        return $this;
    }

    public function selectContentHeight()
    {
        $this->selectField("content_height");

        return $this;
    }

    public function selectIsHtml()
    {
        $this->selectField("is_html");

        return $this;
    }

    public function selectMode()
    {
        $this->selectField("mode");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }
}
