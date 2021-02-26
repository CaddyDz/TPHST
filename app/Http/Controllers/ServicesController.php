<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Service;

class ServicesController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return view('services.index');
	}

	/**
	 * Display the specified service.
	 *
	 * @param \App\Service $service
	 * @return \Illuminate\Http\Response
	 */
	public function show(Service $service)
	{
		$services = Service::all()->except($service->id);
		return view('services.service', compact('service', 'services'));
	}
}
