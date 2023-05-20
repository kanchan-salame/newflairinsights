<?php

use App\Http\Controllers\CaseStudy\CaseStudyController;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\News\NewsController;
use App\Http\Controllers\Report\CategoryController;
use App\Http\Controllers\Report\ReportController;
use App\Http\Controllers\Report;

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


use App\Http\Controllers\PayPalController;
Route::get('/checkout/{slug?}/{parameter?}', [App\Http\Controllers\PayPalController::class, 'checkout'])->name('checkout');
Route::post('process-transaction', [App\Http\Controllers\PayPalController::class, 'processTransaction'])->name('processTransaction');
Route::get('success-transaction', [App\Http\Controllers\PayPalController::class, 'successTransaction'])->name('successTransaction');
Route::get('cancel-transaction', [App\Http\Controllers\PayPalController::class, 'cancelTransaction'])->name('cancelTransaction');
Route::get('/wireTransactionThanks', [App\Http\Controllers\Home\HomeController::class, 'wireTransactionThanks'])->name('wireTransactionThanks');
Route::get('/thanks', [App\Http\Controllers\Home\HomeController::class, 'thanks'])->name('thanks');

Auth::routes();

Route::get('/', [App\Http\Controllers\Home\HomeController::class, 'index'])->name('home');
Route::get('/aboutUs', [App\Http\Controllers\Home\HomeController::class, 'aboutUs'])->name('aboutUs');
Route::get('/latestReport', [App\Http\Controllers\Home\HomeController::class, 'latestReport'])->name('latestReport');
Route::get('/reportDescription/{slug}', [App\Http\Controllers\Home\HomeController::class, 'reportDescription'])->name('reportDescription');
Route::get('/contactUs', [App\Http\Controllers\Home\HomeController::class, 'contactUs'])->name('contactUs');
Route::get('/blog', [App\Http\Controllers\Home\HomeController::class, 'news'])->name('blog');
Route::get('/caseStudy', [App\Http\Controllers\Home\HomeController::class, 'caseStudy'])->name('caseStudy');
Route::get('/reports/{slug}', [App\Http\Controllers\Home\HomeController::class, 'reports'])->name('reports');
Route::get('/faq', [App\Http\Controllers\Home\HomeController::class, 'faq'])->name('faq');

Route::get('/privacyPolicy', [App\Http\Controllers\Home\HomeController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('/termOfServices', [App\Http\Controllers\Home\HomeController::class, 'termOfServices'])->name('termOfServices');
Route::get('/caseStudyDetail/{slug}', [App\Http\Controllers\Home\HomeController::class, 'caseStudyDetail'])->name('caseStudyDetail');
Route::get('/blogDetail/{slug}', [App\Http\Controllers\Home\HomeController::class, 'blogDetail'])->name('blogDetail');
Route::get('/rquestSample/{slug}', [App\Http\Controllers\Home\HomeController::class, 'rquestSample'])->name('rquestSample');
Route::get('/sendAQuery/{slug}', [App\Http\Controllers\Home\HomeController::class, 'sendAQuery'])->name('sendAQuery');
Route::get('/askForDiscount/{slug}', [App\Http\Controllers\Home\HomeController::class, 'askForDiscount'])->name('askForDiscount');
Route::get('/buyNowPage/{slug}', [App\Http\Controllers\Home\HomeController::class, 'buyNowPage'])->name('buyNowPage');
Route::get('/buyNow/{slug}', [App\Http\Controllers\Home\HomeController::class, 'buyNow'])->name('buyNow');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home');
Route::resource('category', CategoryController::class);
Route::resource('report', ReportController::class);
Route::resource('news', NewsController::class);
Route::resource('contact', ContactController::class);
Route::resource('ReportRequest', ReportRequestController::class);
Route::resource('casestudy', CaseStudyController::class);
Route::post('imports', [App\Http\Controllers\Report\ReportController::class, 'import'] )->name('import');

Route::get('/checkout',[App\Http\Controllers\Home\HomeController::class, 'checkout'])->name('checkout');
Route::get('/wireTransferThanks',[App\Http\Controllers\Home\HomeController::class, 'wireTransferThanks'])->name('wireTransferThanks');