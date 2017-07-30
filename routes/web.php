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

Route::get('/', function(){
	return view('welcome');
});

Route::get('/{locale}', function($locale){
	App::setLocale($locale);

	return view('welcome');
})->name('landing');

Route::get('/landing', function () {
    return view('welcome');
});

Route::get('/{locale}/about/event', function ($locale) {
	App::setLocale($locale);

    return view('event');
})->name('about-event');

Route::get('/{locale}/about/team', function ($locale) {
	App::setLocale($locale);

    return view('team');
})->name('about-team');

Route::get('/{locale}/resources', function($locale){
	App::setLocale($locale);

	return view('resources');
})->name('resources');

Route::get('/{locale}/downloads', function($locale){
	App::setLocale($locale);

	return view('downloads');
})->name('downloads');

Route::get('/{locale}/preconf', function($locale){
	App::setLocale($locale);

	return view('preconf');
})->name('preconf');

Route::post('/contact', "Controller@contact")->name('contact');;

Route::get('/{locale}/contact', function ($locale) {
	App::setLocale($locale);

	return view('contact');
})->name('contact');

Route::get('/{locale}/call-for-presentation', function ($locale) {
	App::setLocale($locale);

	return view('call-for-presentation');
})->name('call-for-presentation');



Route::get('/{locale}/faq', function ($locale) {
	App::setLocale($locale);

	return view('faq');
})->name('faq');