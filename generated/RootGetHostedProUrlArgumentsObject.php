<?php

namespace GraphQL\SchemaObject;

class RootGetHostedProUrlArgumentsObject extends ArgumentsObject
{
    protected $input;

    public function setInput(HostedProUrlInputInputObject $hostedProUrlInputInputObject)
    {
        $this->input = $hostedProUrlInputInputObject;

        return $this;
    }
}
