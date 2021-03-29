<?php

namespace Deved\Magento2Graphql\Tests;

use Orchestra\Testbench\TestCase;
use Deved\Magento2Graphql\Magento2GraphqlServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [Magento2GraphqlServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
