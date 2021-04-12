<?php


namespace Deved\Magento2Graphql\Queries;


final class CreateEmptyCart extends AbstractQuery
{

    public function setQuery(): void
    {
        $cart = <<<GQL
        mutation {
          createEmptyCart
        }
        GQL;
        $this->query = $cart;
    }
}
