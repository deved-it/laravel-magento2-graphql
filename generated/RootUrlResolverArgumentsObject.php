<?php

namespace GraphQL\SchemaObject;

class RootUrlResolverArgumentsObject extends ArgumentsObject
{
    protected $url;

    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }
}
