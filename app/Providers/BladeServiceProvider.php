<?php

declare(strict_types=1);

namespace TPHST\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap services.
	 *
	 * @return void
	 */
	public function boot()
	{
		Blade::if('env', function ($env) {
			return app()->environment($env);
		});
	}
}
