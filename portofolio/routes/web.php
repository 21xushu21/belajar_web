<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PageController;
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

Route::get('/', function () {
    return view('welcome');
});

// route page
// Route::get('/page', 'pageController@home');
// Route::get('/page/page-about', 'pageController@about');
// Route::get('/page/page-services', 'pageController@services');
Route::get('/home', [PageController::class, 'page'])->name('user_home');
Route::get('/page-contact', [PageController::class, 'page_contact'])->name('user_page_contact');
Route::get('/page-about', [PageController::class, 'page_about'])->name('user_page_about');
Route::get('/page-services', [PageController::class, 'page_services'])->name('user_page_services');
