<?php

namespace GraphQL\SchemaObject;

class AreaInputInputObject extends InputObject
{
    protected $radius;
    protected $search_term;

    public function setRadius($radius)
    {
        $this->radius = $radius;

        return $this;
    }

    public function setSearchTerm($searchTerm)
    {
        $this->search_term = $searchTerm;

        return $this;
    }
}
