<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\web\MailController;

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

Route::get('/report-hub', [App\Http\Controllers\web\HomeController::class, 'report'])->name('report-hub');
Route::get('/report/{report_slug}', [App\Http\Controllers\web\HomeController::class, 'report_detail'])->name('report_detail');
Route::get('/enquiry/sample/{report_id}', [App\Http\Controllers\web\HomeController::class, 'enquiry_sample'])->name('enquiry_sample');
Route::get('/enquiry/buying/{report_id}', [App\Http\Controllers\web\HomeController::class, 'enquiry_buying'])->name('enquiry_buying');
Route::get('/enquiry/discount/{report_id}', [App\Http\Controllers\web\HomeController::class, 'enquiry_discount'])->name('enquiry_discount');
Route::get('/checkout/{report_id}', [App\Http\Controllers\web\HomeController::class, 'checkout'])->name('checkout');

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


// Mail routes
Route::post('/lead/create', [App\Http\Controllers\web\MailController::class, 'getInTouch'])->name('lead.create');

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
Route::get('/puchase-license-agreement', function () {
    return view('web.cms.puchase-license-agreement');
})->name('puchase-license-agreement');

// SITEMAP
Route::get('/sitemap', function () {
    return view('web.cms.sitemap');
})->name('sitemap');

// ORDER
Route::get('/how-to-order', function () {
    return view('web.cms.how_to_order');
})->name('order');

// Thankyou
Route::get('/thankyou',[LeadController::class,'thankyou'])->name('web.form.thankyou');
