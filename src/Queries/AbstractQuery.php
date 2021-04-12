<?php


namespace Deved\Magento2Graphql\Queries;


use Deved\Magento2Graphql\HasQuery;
use Deved\Magento2Graphql\Magento2Graphql;
use Deved\Magento2Graphql\Queryable;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;

abstract class AbstractQuery
    implements Arrayable, \ArrayAccess, Jsonable, \JsonSerializable, Queryable
{

     /** @var Magento2Graphql */
    public $gql;

    /** @var  array */
    protected $content;

    /** @var string raw GraphQl Query */
    protected $query;

    /**
     * AbstractModel constructor.
     * @param Magento2Graphql $gql
     */
    public function __construct(Magento2Graphql $gql)
    {
        $this->gql = $gql;
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function executeQuery(array $variables = []): Queryable
    {
        foreach ($variables as $index => $var) {
            $this->{$index} = $var;
        }
        $this->setQuery();
        $this->content = $this->gql->client->runRawQuery($this->getQuery(), true, $variables)->getData();
        return $this;
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
