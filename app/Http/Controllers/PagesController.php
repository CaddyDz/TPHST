<?php

namespace TPHST\Http\Controllers;

use TPHST\Client;
use TPHST\Project;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        $projects = Project::all();
        return view('index', compact('clients', 'projects'));
    }
}
