<?php

use Illuminate\Routing\Route as RoutingRoute;
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


//Web
Route::get('/', [App\Http\Controllers\web\HomeController::class, 'home'])->name('home');
Route::post('/report', [App\Http\Controllers\web\HomeController::class, 'reportSearch'])->name('reportSeacrhByTitle');

Route::get('/industry', [App\Http\Controllers\web\HomeController::class, 'industry'])->name('industry');
Route::get('/category/{category_slug}', [App\Http\Controllers\web\HomeController::class, 'category'])->name('category');

Route::get('/report', [App\Http\Controllers\web\HomeController::class, 'report'])->name('report');
Route::get('/report/{report_slug}', [App\Http\Controllers\web\HomeController::class, 'report_detail'])->name('report_detail');

Route::get('/partner', [App\Http\Controllers\web\HomeController::class, 'partner'])->name('partner');

Route::get('/about', [App\Http\Controllers\web\HomeController::class, 'about'])->name('about');
Route::get('/career', [App\Http\Controllers\web\HomeController::class, 'career'])->name('career');
Route::get('/team', [App\Http\Controllers\web\HomeController::class, 'team'])->name('team');

Route::get('/contact', [App\Http\Controllers\web\HomeController::class, 'contact'])->name('contact');

Route::get('/blog', [App\Http\Controllers\web\HomeController::class, 'blog'])->name('blog');
Route::get('/blog/{blog_slug}', [App\Http\Controllers\web\HomeController::class, 'blog_details'])->name('blog-details');
Route::post('/blog', [App\Http\Controllers\web\HomeController::class, 'blogSearch'])->name('blogSeacrhByTitle');
Route::get('/blog/category/{slug}', [App\Http\Controllers\web\HomeController::class, 'blogCategory'])->name('blogCategory');

Route::get('/news', [App\Http\Controllers\web\HomeController::class, 'news'])->name('news');


// PRIVACY
Route::get('/privacy-policy', function () {
    return view('web.cms.privacy_policy');
})->name('privacy');

// FAQ
Route::get('/faq', function () {
    return view('web.cms.faq');
})->name('faq');

// TERMS
Route::get('/terms', function () {
    return view('web.cms.terms_of_use');
})->name('terms');

// AGREEMENT
Route::get('/agreement', function () {
    return view('web.cms.agreement');
})->name('agreement');

// SITEMAP
Route::get('/sitemap', function () {
    return view('web.cms.sitemap');
})->name('sitemap');

// ORDER
Route::get('/how-to-order', function () {
    return view('web.cms.how_to_order');
})->name('order');


// ENQUIRE BEFORE BUYING
Route::get('/enquire-before-buying', function () {
    return view('web.report.enquireBeforeBuying');
})->name('enquire-before-buying');
