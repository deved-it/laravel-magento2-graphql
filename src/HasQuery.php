<?php


namespace Deved\Magento2Graphql;


interface HasQuery
{

    /**
     * Get GraphQl Query
     * @param string $name
     * @return string
     */
    public function getQuery($name) : string;

    /**
     * Execute GraphQl Query
     * @param $name
     * @return $this
     */
    public function executeQuery($name): HasQuery;

}
