<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Project;

class ProjectsController extends Controller
{
	public function show(Project $project)
	{
		$images = $project->getMedia('projects');
		$images = $images->mapWithKeys(function ($image) {
			return [$image->name => $image->getUrl('thumb')];
		});
		return view('projects.project', compact('project', 'images'));
	}

	public function index()
	{
		$projects = Project::all();
		return view('projects.index', compact('projects'));
	}
}
