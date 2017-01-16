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

Route::get('/landing', function () {
    return view('welcome');
});

Route::get('/about/event', function () {
    return view('event');
});

Route::get('/about/team', function () {
    return view('team');
});

Route::get('/resources', function(){
	return view('resources');
});

Route::get('/downloads', function(){
	return view('downloads');
});

Route::get('/{locale}/contact', function ($locale) {
	App::setLocale($locale);

	return view('contact');
});

Route::get('/{locale}/faq', function ($locale) {
	App::setLocale($locale);

	return view('faq');
});

Route::post('/contact', "Controller@contact")->name('contact');;

Route::get('/', function(){
	return view('welcome');
});