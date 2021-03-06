<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestimoniesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('testimonies', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->text('body');
			$table->string('witness_name');
			$table->string('witness_position');
			$table->unsignedInteger('service_id')->nullable();
			$table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
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
		Schema::dropIfExists('testimonies');
	}
}
