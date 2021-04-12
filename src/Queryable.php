<?php


namespace Deved\Magento2Graphql;


interface Queryable
{
    /**
     * Set GraphQl Raw Query
     *
     */
    public function setQuery() : void;

    /**
     * Get GraphQl Query
     *
     * @return string
     */
    public function getQuery() : string;

    /**
     * Execute GraphQl Query
     *
     * @param array $variables
     * @return $this
     */
    public function executeQuery(array $variables = []): Queryable;
}
