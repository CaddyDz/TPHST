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

    /**
     * Test email route.
     *
     * @return void
     */
    public function testEmailRoute()
    {
        $response = $this->get('/email');
        $response->assertRedirect('/admin/login');
    }

    /**
     * Test email route when authenticated.
     *
     * @return void
     */
    public function testEmailRouteAuthenticated()
    {
        $this->login();
        $response = $this->get('/email');
        $response->assertRedirect('/admin/custom-email-sender');
    }
}
