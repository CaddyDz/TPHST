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
Route::get('about', 'PagesController@getAbout')->name('about');
Route::redirect('email', 'admin/custom-email-sender')->middleware('auth');
Route::view('contact', 'contact')->name('contact');
Route::view('team', 'team')->name('team');
Route::view('review', 'review')->name('review');
Route::view('faq', 'faq')->name('faq');
Route::get('projects', 'ProjectsController@index')->name('projects');
Route::get('projects/{project}', 'ProjectsController@show')->name('project');
Route::get('services', 'ServicesController@index')->name('services');
Route::get('blog/{article}', 'ArticlesController@show')->name('article');
Route::get('blog', 'ArticlesController@index')->name('blog');
Route::post('/subscribe', 'MailingListController@subscribe')->name('subscribe');
Route::get('{service}', 'ServicesController@show')
     ->name('service')
     ->where('service', '^(?!nova|admin)[أ-يa-zA-Z0-9-_]*$');
