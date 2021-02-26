<?php

declare(strict_types=1);

namespace Database\Factories;

use App\{Article, Category};
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
	/**
	 * The name of the factory's corresponding model.
	 *
	 * @var string
	 */
	protected $model = Article::class;

	/**
	 * Define the model's default state.
	 *
	 * @return array
	 */
	public function definition()
	{
		$sentence = $this->faker->sentence;
		return [
			'author_id' => create(User::class)->id,
			'category_id' => function () {
				Category::inRandomOrder()->first()->id;
			},
			'title' => $this->faker->sentence,
			'seo_title' => $this->faker->sentence,
			'excerpt' => str_limit($sentence, 30),
			'body' => $this->faker->text,
			'slug' => sluggify($sentence),
			'meta_description' => $this->faker->text,
			'meta_keywords' => implode(', ', $this->faker->words(5)),
			'status' => $this->faker->randomElement(['PUBLISHED', 'DRAFT', 'PENDING']),
			'featured' => $this->faker->boolean(),
		];
	}
}
