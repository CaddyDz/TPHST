<?php

namespace TPHST\Http\Controllers;

use TPHST\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function show(Project $project)
    {
        return view('projects.project', compact('project'));
    }
}
