<?php

namespace GraphQL\SchemaObject;

class ProductAttributeSortInputInputObject extends InputObject
{
    protected $name;
    protected $position;
    protected $price;
    protected $relevance;

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    public function setRelevance($relevance)
    {
        $this->relevance = $relevance;

        return $this;
    }
}
