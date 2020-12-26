<?php

declare(strict_types=1);

use TPHST\Service;
use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$services = [
			'Travaux Publics',
			'Hydraulics',
			'Sous Terrain',
			'Travaux d\'infrastructure',
			'Terrassement',
			'VRD',
			'Routes et auto-routes',
		];
		foreach ($services as $service) {
			Service::create([
				'name' => $service,
				'slug' => sluggify($service)
			]);
		}
	}
}
