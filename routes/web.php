<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@index');
Route::view('about', 'about');
Route::view('contact', 'contact');
Route::view('team', 'team');
Route::view('review', 'review');
Route::view('faq', 'faq');
Route::get('services', function() {
    return view('services.index');
});

// Route::get('{service}', 'ServicesController@show');
