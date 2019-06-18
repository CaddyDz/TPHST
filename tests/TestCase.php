<?php

namespace Tests;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    use DatabaseMigrations;

    /**
     * Set the currently logged in user for the application.
     *
     * @param Illuminate\Contracts\Auth\Authenticatable
     *
     * @return TPHST\User authenticated
     */
    protected function login($user = null)
    {
        $user = $user ?: create('TPHST\User');
        $this->be($user);

        return $this;
    }
}
