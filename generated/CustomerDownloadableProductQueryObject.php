<?php

namespace GraphQL\SchemaObject;

class CustomerDownloadableProductQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerDownloadableProduct";

    public function selectDate()
    {
        $this->selectField("date");

        return $this;
    }

    public function selectDownloadUrl()
    {
        $this->selectField("download_url");

        return $this;
    }

    public function selectOrderIncrementId()
    {
        $this->selectField("order_increment_id");

        return $this;
    }

    public function selectRemainingDownloads()
    {
        $this->selectField("remaining_downloads");

        return $this;
    }

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }
}
