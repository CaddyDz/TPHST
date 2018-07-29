<?php

namespace TPHST\Http\Controllers;

use Illuminate\Http\Request;
use TPHST\Client;

class PagesController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('index', compact('clients'));
    }
}
