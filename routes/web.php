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
Route::get('projects/{project}', 'ProjectsController@show')->name('project');
Route::get('services', 'ServicesController@index')->name('services');
Route::get('blog/{article}', 'ArticlesController@show')->name('article');
Route::post('/subscribe', 'MailingListController@subscribe')->name('subscribe');
Route::get('{service}', 'ServicesController@show')
     ->name('service')
     ->where('service', '^(?!nova|admin)[أ-يa-zA-Z0-9-_]*$');
