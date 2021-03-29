<?php

namespace GraphQL\SchemaObject;

class RootIsEmailAvailableArgumentsObject extends ArgumentsObject
{
    protected $email;

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}
