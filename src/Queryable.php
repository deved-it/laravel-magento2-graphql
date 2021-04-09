<?php


namespace Deved\Magento2Graphql;


interface Queryable
{
    /**
     * Get GraphQl Query
     * @param string $name
     * @return string
     */
    public function getQuery() : string;

    /**
     * Execute GraphQl Query
     * @param $name
     * @param array $variables
     * @return $this
     */
    public function executeQuery(array $variables = []): Queryable;
}
