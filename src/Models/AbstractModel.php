<?php


namespace Deved\Magento2Graphql\Models;


use Deved\Magento2Graphql\Magento2Graphql;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;

abstract class AbstractModel implements Arrayable, \ArrayAccess, Jsonable, \JsonSerializable
{
    /**
     * @var Magento2Graphql
     */
    public $gql;
    /** @var  array */
    protected $content;

    /**
     * AbstractModel constructor.
     * @param Magento2Graphql $gql
     */
    public function __construct(Magento2Graphql $gql)
    {
        $this->gql = $gql;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function toArray()
    {
        return $this->content;
    }

    public function offsetExists($offset)
    {
        return isset($this->content[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->content[$offset];
    }

    public function offsetSet($offset, $value)
    {
        $this->content[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->content[$offset]);
    }

    public function toJson($options = 0)
    {
        return json_encode($this->content);
    }

    public function jsonSerialize()
    {
        return $this->content;
    }
}
