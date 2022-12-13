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

// Route::get('/', function () {
//     return view('home');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\Home\HomeController::class, 'index'])->name('home');
Route::get('/aboutUs', [App\Http\Controllers\Home\HomeController::class, 'aboutUs'])->name('aboutUs');
Route::get('/latestReport', [App\Http\Controllers\Home\HomeController::class, 'latestReport'])->name('latestReport');
Route::get('/contactUs', [App\Http\Controllers\Home\HomeController::class, 'contactUs'])->name('contactUs');
Route::get('/news', [App\Http\Controllers\Home\HomeController::class, 'news'])->name('news');
Route::get('/caseStudy', [App\Http\Controllers\Home\HomeController::class, 'caseStudy'])->name('caseStudy');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
