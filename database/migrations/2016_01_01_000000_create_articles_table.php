<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('author_id');
			$table->foreign('author_id')->references('id')->on('users')->onDelete('cascade');
			$table->unsignedInteger('category_id')->nullable();
			$table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
			$table->string('title');
			$table->string('seo_title')->nullable();
			$table->text('excerpt');
			$table->text('body');
			$table->string('slug')->unique();
			$table->text('meta_description')->nullable();
			$table->text('meta_keywords')->nullable();
			$table->enum('status', ['PUBLISHED', 'DRAFT', 'PENDING'])->default('DRAFT');
			$table->boolean('featured')->default(0);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('articles');
	}
}
