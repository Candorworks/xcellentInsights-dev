<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BlogNewsController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CommonController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\JobsController;
use App\Http\Controllers\Admin\DiscountLeadController;
use App\Http\Controllers\Admin\PublisherController;
use App\Http\Controllers\Admin\BulkreportController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\RssController;

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


//Home COntroller
Route::get('/', [App\Http\Controllers\web\HomeController::class, 'home'])->name('home');
Route::post('/report-hub', [App\Http\Controllers\web\HomeController::class, 'reportSearch'])->name('reportSeacrhByTitle');

Route::get('/partner', [App\Http\Controllers\web\HomeController::class, 'partner'])->name('partner');

Route::get('/about', [App\Http\Controllers\web\HomeController::class, 'about'])->name('about');
Route::get('/career', [App\Http\Controllers\web\HomeController::class, 'career'])->name('career');
Route::get('/team', [App\Http\Controllers\web\HomeController::class, 'team'])->name('team');

Route::get('/contact', [App\Http\Controllers\web\HomeController::class, 'contact'])->name('contact');

Route::get('/news', [App\Http\Controllers\web\HomeController::class, 'news'])->name('news');

Route::get('/sitemap', [App\Http\Controllers\web\HomeController::class, 'sitemap'])->name('sitemap');


// Category Controller
Route::get('/industry', [App\Http\Controllers\web\CategoryController::class, 'industry'])->name('industry');
Route::get('/category/{category_slug}', [App\Http\Controllers\web\CategoryController::class, 'category'])->name('category');


// Report Controller
Route::get('/report-hub', [App\Http\Controllers\web\ReportController::class, 'report'])->name('report-hub');
Route::get('/report/{report_slug}', [App\Http\Controllers\web\ReportController::class, 'report_detail'])->name('report_detail');
Route::get('/enquiry/sample/{report_id}', [App\Http\Controllers\web\ReportController::class, 'enquiry_sample'])->name('enquiry_sample');
Route::get('/enquiry/buying/{report_id}', [App\Http\Controllers\web\ReportController::class, 'enquiry_buying'])->name('enquiry_buying');
Route::get('/enquiry/discount/{report_id}', [App\Http\Controllers\web\ReportController::class, 'enquiry_discount'])->name('enquiry_discount');
Route::get('/checkout/{report_id}', [App\Http\Controllers\web\ReportController::class, 'checkout'])->name('checkout');


// Blog Controller
Route::get('/blog', [App\Http\Controllers\web\BlogController::class, 'blog'])->name('blog');
Route::get('/blog/{blog_slug}', [App\Http\Controllers\web\BlogController::class, 'blog_details'])->name('blog-details');
Route::post('/blog', [App\Http\Controllers\web\BlogController::class, 'blogSearch'])->name('blogSeacrhByTitle');
Route::get('/blog/category/{slug}', [App\Http\Controllers\web\BlogController::class, 'blogCategory'])->name('blogCategory');


// Mail Controller
Route::post('/lead/create', [App\Http\Controllers\web\MailController::class, 'getInTouch'])->name('lead.create');
Route::get('/thankyou',[App\Http\Controllers\web\MailController::class,'thankyou'])->name('web.form.thankyou');
Route::post('/subscribe',[App\Http\Controllers\web\MailController::class,'subscribe'])->name('subscribe');
Route::post('/career_mail',[App\Http\Controllers\web\MailController::class,'career_mail'])->name('career_mail');


// Normal Routes
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

// ORDER
Route::get('/how-to-order', function () {
    return view('web.cms.how_to_order');
})->name('order');

require __DIR__.'/auth.php';

Route::get('/admin-panel', function () {
    // return view('welcome');
    return redirect()->to('admin/login');
});



Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('subadmin', AdminController::class);
    Route::resource('category', CategoryController::class);
    Route::get('/dashboard',[CommonController::class,'dashboard'])->name('admin.dashboard');
    Route::get('/subcategory/list',[CategoryController::class,'subCategoryList'])->name('subcategory.list');
    Route::resource('publisher',PublisherController::class);
    Route::resource('jobs',JobsController::class);
    
    Route::get('/order/list',[OrderController::class,'list'])->name('admin.order.list');
    Route::post('/order/list/multi-delete',[OrderController::class,'multiOrderListDelete'])->name('admin.order.multiOrderListDelete');
    Route::get('/order/export',[OrderController::class,'exportOrder'])->name('admin.order.export');
    Route::get('/order/active/list',[OrderController::class,'orderActiveList'])->name('admin.orderlist.active');
    Route::get('/order/inactive/list',[OrderController::class,'orderInactiveList'])->name('admin.orderlist.inactive');
    Route::post('/order/active',[OrderController::class,'orderActive'])->name('admin.order.active');
    Route::post('/order/inactive',[OrderController::class,'orderInactive'])->name('admin.order.inactive');
    // reports
    Route::resource('reports', App\Http\Controllers\Admin\ReportController::class);
    Route::post('/excel-file/reports',[App\Http\Controllers\Admin\ReportController::class,'uploadCsvFile'])->name('admin.report.uploadCsvFile');
    Route::get('/sample/download',[App\Http\Controllers\Admin\ReportController::class,'downloadSampleCsv'])->name('admin.report.downloadSampleCsv');
    Route::post('/multi-report/delete',[App\Http\Controllers\Admin\ReportController::class,'multiReportDelete'])->name('admin.report.multiReportDelete');

   
    Route::get('bulk_reports',[BulkreportController::class, 'bulkReports'])->name('admin.report.bulkReports');
    Route::get('bulk-reports/sample-excel',[BulkreportController::class, 'exportReortsSample'])->name('admin.report.bulk.sample');
    Route::get('bulk-reports/all-excel',[BulkreportController::class, 'exportReortsAll'])->name('admin.report.bulk.all');
    Route::post('bulk-reports/mark-top-selling',[BulkreportController::class, 'markTopSellingReports'])->name('admin.reports.mark-top-selling');
    Route::post('bulk-reports/unmark-top-selling',[BulkreportController::class, 'unmarkTopSellingReports'])->name('admin.reports.unmark-top-selling');
    Route::post('bulk-reports/import',[BulkreportController::class, 'importReortsSheet'])->name('admin.report.bulk.import');


    Route::get('/career/list',[JobsController::class,'careerList'])->name('career.list');
    Route::get('/newsletter/list',[App\Http\Controllers\Admin\ReportController::class,'subscribeList'])->name('newsletter');
    Route::get('/newsletter/export',[App\Http\Controllers\Admin\ReportController::class,'exportNewsLetter'])->name('admin.newsletter.export');
   

    // lead manager
    Route::get('/lead/forms/export',[App\Http\Controllers\Admin\ReportController::class,'exportLeadForm'])->name('admin.lead-forms.export');
    Route::get('/lead/forms',[App\Http\Controllers\Admin\LeadController::class,'forms'])->name('lead.forms');
    Route::get('/lead/reports',[App\Http\Controllers\Admin\LeadController::class,'reportsRelated'])->name('lead.reportsRelated');
    Route::post('/multi-reportsleads/delete',[App\Http\Controllers\Admin\LeadController::class,'multiReportLeadsDelete'])->name('admin.report.multiReportLeadsDelete');
    Route::post('/multi-formsleads/delete',[App\Http\Controllers\Admin\LeadController::class,'multiFormLeadsDelete'])->name('admin.report.multiFormLeadsDelete');
    Route::get('/lead/reports/export',[App\Http\Controllers\Admin\LeadController::class,'reportsRelatedExport'])->name('admin.lead.report.export');
    Route::get('/lead/partner',[App\Http\Controllers\Admin\LeadController::class,'partner'])->name('lead.partner');
    Route::get('/lead/partner/export',[App\Http\Controllers\Admin\ReportController::class,'exportLeadPartner'])->name('admin.lead-partner.export');

    // Route::resource('lead/discount',DiscountLeadController::class)->name('discount');
    Route::get('/discount/list',[DiscountLeadController::class,'list'])->name('admin.discount.list');
    Route::get('/discount/export',[App\Http\Controllers\Admin\ReportController::class,'exportdiscountList'])->name('admin.discount.export');
    Route::get('/discount/add',[DiscountLeadController::class,'add'])->name('admin.discount.add');
    Route::get('/discount/edit/{id}',[DiscountLeadController::class,'edit'])->name('admin.discount.edit');
    Route::post('/discount/update/{id}',[DiscountLeadController::class,'update'])->name('admin.discount.update');
    // Route::post('lead/discount/destroy/{id}',[DiscountLeadController::class,'destroy'])->name('admin.discount.destroy');
    Route::post('/discount/store',[DiscountLeadController::class,'store'])->name('admin.discount.store');

    
    Route::resource('blogs-news', BlogNewsController::class, [
        "names" => [
            'create' => "admin.blogs-news.create",
            'store' => "admin.blogs-news.store",
            'index' => "admin.blogs-news.index",
            'update' => "admin.blogs-news.update",
            'edit' => "admin.blogs-news.edit",
        ],
    ]);
    
   Route::resource('rss',RssController::class);
    
});


Route::get('rss_xml' ,[RssController::class ,'getxml'])->name('rss.getxml');
Route::get('/press-release' ,[RssController::class ,'press_release'])->name('press-release');
Route::get('/press-release/{slug}',[RssController::class,'showinfo'])->name('press.release.detail');