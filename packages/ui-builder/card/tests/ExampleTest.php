<?php

namespace UiBuilder\Card\Tests;

use Orchestra\Testbench\TestCase;
use UiBuilder\Card\CardServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [CardServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
