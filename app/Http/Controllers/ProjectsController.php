<?php

namespace TPHST\Http\Controllers;

use TPHST\Project;

class ProjectsController extends Controller
{
    public function show(Project $project)
    {
        $images = $project->getMedia('projects');
        $images = $images->mapWithKeys(function ($image) {
            return [$image->name => $image->getUrl()];
        });
        return view('projects.project', compact('project', 'images'));
    }
}
