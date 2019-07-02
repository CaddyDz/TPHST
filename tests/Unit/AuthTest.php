<?php

namespace Tests\Unit;

use Tests\TestCase;

class AuthTest extends TestCase
{
    /**
     * Test that authenticated users gets redirected
     * when attempting to login
     *
     * @return void
     */
    public function testRedirectIfAuthenticated()
    {
        $this->login();
        $response = $this->get('/admin/login');
        
        // $response->assertRedirect('/admin/custom-email-sender');
    }
}
