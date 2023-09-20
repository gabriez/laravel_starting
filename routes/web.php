<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

// Route::get('/', 'App\Http\Controllers\HomeController')->name('home');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', 'App\Http\Controllers\AboutController')->name('about');

Route::get('/contact', 'App\Http\Controllers\ContactController')->name('contact');

Route::post('/contact', 'App\Http\Controllers\ContactFormController@store')->name('contact');


Route::resource('projects', 'App\Http\Controllers\ProjectsController')->names('projects');

/*Route::get('/projects', '@index')->name('projects.index');
Route::get('/projects/{project}', 'App\Http\Controllers\ProjectsController@show')->name('projects.show');

Route::get('/projects/create', 'App\Http\Controllers\ProjectsController@create')->name('projects.create');
Route::post('/projects', 'App\Http\Controllers\ProjectsController@store')->name('projects.store');

Route::get('/projects/{project}/edit', 'App\Http\Controllers\ProjectsController@edit')->name('projects.edit');
Route::patch('/projects/{project}', 'App\Http\Controllers\ProjectsController@update')->name('projects.update');

Route::delete('/projects/{project}', 'App\Http\Controllers\ProjectsController@destroy')->name('projects.delete');*/






