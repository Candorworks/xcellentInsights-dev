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


// HOME 
Route::get('/', function () {
    return view('home');
})->name('home');
// ABOUT US 
Route::get('/about', function () {
    return view('about');
})->name('about');
// CONTACT US
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
// BLOG
Route::get('/blog', function () {
    return view('blog');
})->name('blog');
// INDIVIDUAL BLOG
Route::get('/blog/hi', function () {
    return view('singleBlog');
})->name('individual-blog');
// NEWS
Route::get('/news', function () {
    return view('news');
})->name('news');
// INDUSTRY
Route::get('/industry', function () {
    return view('industry');
})->name('industry');
// REPORT
Route::get('/report', function () {
    return view('report');
})->name('report');
// PARTNER
Route::get('/partner', function () {
    return view('partner');
})->name('partner');
// CAREER
Route::get('/career', function () {
    return view('career');
})->name('career');
// TEAM
Route::get('/team', function () {
    return view('team');
})->name('team');
// MODAL FORM
Route::get('/get-in-touch', function () {
    return view('modalContactForm');
})->name('get-in-touch');


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
