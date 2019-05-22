<?php

namespace TPHST\Http\Controllers;

use TPHST\Project;

class ProjectsController extends Controller
{
    public function show(Project $project)
    {
        $images = $project->getMedia('images');
        return view('projects.project', compact('project', 'images'));
    }
}
