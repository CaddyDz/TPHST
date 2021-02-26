<?php

declare(strict_types=1);

use App\Article;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run(Faker $faker)
	{
		Article::factory(20)->create();
		// ->each(function($article) use ($faker) {
		//     $article->addMedia($faker->unique()->image($dir = '/tmp', $width = 640, $height = 360, 'city'))
		//             ->toMediaCollection('images');
		// });
	}
}
