<?php

namespace GraphQL\SchemaObject;

class RootGetPayflowLinkTokenArgumentsObject extends ArgumentsObject
{
    protected $input;

    public function setInput(PayflowLinkTokenInputInputObject $payflowLinkTokenInputInputObject)
    {
        $this->input = $payflowLinkTokenInputInputObject;

        return $this;
    }
}
