<?php

namespace TPHST\Http\Controllers;

use TPHST\Image;
use TPHST\Client;
use TPHST\Project;

class PagesController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        $projects = Project::all();
        return view('index', compact('clients', 'projects'));
    }

    public function getAbout()
    {
        $images = Image::where('name', 'LIKE', 'Bureau%')->get(['name', 'path']);
        return view('about', compact('images'));
    }
}
