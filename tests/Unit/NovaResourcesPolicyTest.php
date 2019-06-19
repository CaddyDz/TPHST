<?php

namespace Tests\Unit;

use Tests\TestCase;
use Laravel\Nova\Nova;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class NovaResourcesPolicyTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * Test that non admin users can't access resources thgrough the admin panel.
     *
     * @return void
     */
    public function testNovaResourceAccess()
    {
        $this->login();
        Nova::resourcesIn(app_path('Nova'));
        $resources = Arr::except(Nova::$resources, [0, 1]);
        foreach ($resources as $resource) {
            $response = $this->get('nova-api/' . Str::plural(strtolower(class_basename($resource))) . '/cards');
            $response->assertForbidden();
        }
    }
}
