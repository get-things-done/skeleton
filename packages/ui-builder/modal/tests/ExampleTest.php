<?php

namespace UiBuilder\Modal\Tests;

use Orchestra\Testbench\TestCase;
use UiBuilder\Modal\ModalServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [ModalServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
