<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


/* route index */
Route::get('/', 'HomeController@index')->name('home');

/* route services */
Route::get('/services', 'ServiceController@index')->name('services');

/* route testimonials */
Route::get('/testimonials', 'TestimonialController@index')->name('testimonials');

/* route about */
Route::get('/about', 'AboutController@index')->name('about');
