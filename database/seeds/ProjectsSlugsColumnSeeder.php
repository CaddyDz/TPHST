<?php

declare(strict_types=1);

use TPHST\Project;
use Illuminate\Database\Seeder;

class ProjectsSlugsColumnSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		foreach (Project::all() as $project) {
			$project->slug = sluggify($project->title);
			$project->save();
		}
	}
}
