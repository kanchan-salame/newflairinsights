<?php

use App\Http\Controllers\CaseStudy\CaseStudyController;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\News\NewsController;
use App\Http\Controllers\Report\CategoryController;
use App\Http\Controllers\Report\ReportController;
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
Route::get('/blog', [App\Http\Controllers\Home\HomeController::class, 'news'])->name('blog');
Route::get('/caseStudy', [App\Http\Controllers\Home\HomeController::class, 'caseStudy'])->name('caseStudy');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home');
Route::resource('category', CategoryController::class);
Route::resource('report', ReportController::class);
Route::resource('news', NewsController::class);
Route::resource('contact', ContactController::class);
Route::resource('casestudy', CaseStudyController::class);

// Auth::routes();
