<?php

declare(strict_types=1);

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$categories = [
			'Construction',
			'Appertment',
			'Workshop',
			'Oil & Gas Fields',
			'Roads & Highway',
			'Industry',
			'Power Station',
			'Reconstruction Services',
		];
		foreach ($categories as $category) {
			Category::create([
				'name' => $category
			]);
		}
	}
}
