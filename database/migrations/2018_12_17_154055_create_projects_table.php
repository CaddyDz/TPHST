<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('project_categories')->onDelete('cascade');
            $table->string('title');
            $table->text('description');
            $table->text('details')->nullable();
            $table->date('starting_date')->nullable();
            $table->date('finishing_date')->nullable();
            $table->string('duration')->nullable();
            $table->string('location')->nullable();
            $table->string('image')->nullable();
            $table->enum('status', ['pending', 'in_progress', 'completed']);
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
        Schema::dropIfExists('projects');
    }
}
