<?php

namespace Tests\Feature;

use Tests\TestCase;

class RoutesTest extends TestCase
{
    /**
     * Test index route.
     *
     * @return void
     */
    public function testIndexRoute()
    {
        $response = $this->get('/');

        $response->assertOk();
    }
}
