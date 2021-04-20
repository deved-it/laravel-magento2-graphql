<?php


namespace Deved\Magento2Graphql\Tests;


use Deved\Magento2Graphql\Magento2Graphql;
use Deved\Magento2Graphql\Magento2GraphqlServiceProvider;
use Deved\Magento2Graphql\Queries\Cart;
use Deved\Magento2Graphql\Queries\Products;
use Deved\Magento2Graphql\Queryable;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use Tests\TestCase;

class GqlTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [Magento2GraphqlServiceProvider::class];
    }

    /**
     * @return Magento2Graphql
     */
    public function testCreateMagento2Graphql()
    {
        $mock = new MockHandler([
            new Response(200, [], '{"data": {"items": {"total_count": 17}}}'), //products
            new Response(200, [], '{"data": {"items": {"total_count": 17}}}') //cart
        ]);
        $handlerStack = HandlerStack::create($mock);
        $client = new Client(['handler' => $handlerStack]);
        $gql = new Magento2Graphql($client);
        $this->assertInstanceOf(Magento2Graphql::class, $gql);
        return $gql;
    }

    /**
     * @depends testCreateMagento2Graphql
     * @param Magento2Graphql $gql
     */
    public function testProducts(Magento2Graphql $gql)
    {
        /** @var Products $products */
        $products = $gql->products(['category' => 6]);
        $this->assertIsArray($products->toArray());
    }

    /**
     * @depends testCreateMagento2Graphql
     * @param Magento2Graphql $gql
     */
    public function testCart(Magento2Graphql $gql)
    {
        /** @var Cart $cart */
        $cart = $gql->cart();
        $this->assertIsArray($cart->toArray());
        return $cart;
    }

}
