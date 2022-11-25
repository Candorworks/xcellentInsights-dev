<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Report;
use App\Models\Blog;
use App\Models\Job;
use App\Models\Cms;
use App\Models\Country;
use App\Models\Licences_types;
use DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function home()
    {
        $reports = Report::orderBy('id', 'desc')->where('active', '1')->limit(4)->get();
        $results = Category::all();
        $cms = CMS::all();
        return view('web.home', compact('results', 'reports'));
    }

    public function reportSearch(Request $request, $categoryName = null)
    {
        try {
            $results = Category::all();
            $reports = Report::Where('title', 'like', '%' . $request->get('homepagesearch') . '%')->where('active', '1')->get();
            return view('web.report.report', compact('results', 'reports', 'categoryName'));
        } catch (\Exception $e) {
            logger($e->getMessage());
            logger($e->getTraceAsString());
            return redirect()->back()->withFail('Error Oops somethings wents wrong.');
        }
    }

    // public function categorySearch(Request $request, $category_slug)
    // {
    //     try {
    //         $categories = Category::where("slug", $category_slug)->first();
    //         $category_id =  $categories->id;
    //         $reports = Report::Where('title', 'like', '%' . $request->get('categorysearch') . '%')->where('active', '1')->get();
    //         $category_name = $categories->name;
    //         $results = Category::all();
    //         return view('web.industry.category', compact('categories','results', 'reports'));
    //     } catch (\Exception $e) {
    //         logger($e->getMessage());
    //         logger($e->getTraceAsString());
    //         return redirect()->back()->withFail('Error Oops somethings wents wrong.');
    //     }
    // }

    public function industry()
    {
        $results = Category::all();
        return view('web.industry.industry', compact('results'));
    }

    public function category(Request $request, $category_slug)
    {
        $categories = Category::where("slug", $category_slug)->first();
        $category_id =  $categories->id;
        $category_name = $categories->name;
        $reports = Report::where('category_id', $category_id)->where('active', '1')->get();
        $results = Category::all();
        return view('web.industry.category', compact('categories', 'results', 'reports'));
    }


    public function report()
    {
        $results = Category::all();
        $reports = Report::all();
        return view('web.report.report', compact('results', 'reports'));
    }

    public function report_detail(Request $request, $report_slug)
    {
        $report = Report::where("slug", $report_slug)->first();
        $countries = Country::all();
        $license = Licences_types::all();
        return view('web.report.reportDetail', compact('report', 'countries' , 'license'));
    }

    public function enquiry_sample(Request $request, $report_id){
        $heading = "Request Sample";
        $report = Report::where("id", $report_id)->first();
        $countries = Country::all();
        return view('web.report.enquiry' , compact('heading' , 'report' , 'countries'));
    }

    public function enquiry_buying(Request $request, $report_id){
        $heading = "Enquiry before Buying";
        $report = Report::where("id", $report_id)->first();
        $countries = Country::all();
        return view('web.report.enquiry' , compact('heading' , 'report' , 'countries'));
    }

    public function enquiry_discount(Request $request, $report_id){
        $heading = "Check For Discount";
        $report = Report::where("id", $report_id)->first();
        $countries = Country::all();
        return view('web.report.enquiry' , compact('heading' , 'report' , 'countries'));
    }

    public function checkout(Request $request, $report_id){
        $report = Report::where("id", $report_id)->first();
        $countries = Country::all();
        return view('web.report.checkout' ,compact('report' , 'countries'));
    }

    public function partner()
    {
        return view('web.partner');
    }

    public function about()
    {
        return view('web.about');
    }

    public function career()
    {
        $results = Job::all();
        return view('web.career.career', compact('results'));
    }

    public function team()
    {
        return view('web.career.team');
    }

    public function contact()
    {
        return view('web.contact');
    }

    public function blog($categoryName = null)
    {
        $results = Blog::where('active', '1')->get();
        return view('web.cms.blog', compact('results', 'categoryName'));
    }

    public function blog_details(Request $request, $blog_slug)
    {
        $categories = Category::where('active', '1')->get();
        $results = Blog::orderBy('id', 'desc')->where('active', '1')->where('type', 'Blog')->limit(5)->get();
        $blog = Blog::where("slug", $blog_slug)->first();
        return view('web.cms.singleBlog', compact('blog', 'results', 'categories'));
    }

    public function blogSearch(Request $request, $categoryName = null)
    {
        try {
            $results = Blog::Where('title', 'like', '%' . $request->get('searchtitle') . '%')->where('active', '1')->where('type', 'Blog')->get();
            return view('web.cms.blog', compact('results', 'categoryName'));
        } catch (\Exception $e) {
            logger($e->getMessage());
            logger($e->getTraceAsString());
            return redirect()->back()->withFail('Error Oops somethings wents wrong.');
        }
    }

    public function blogCategory($category_slug)
    {
        try {
            $category = Category::select('id', 'name')->where('slug', $category_slug)->first();
            $categoryId = $category->id;
            $categoryName = $category->name;
            $results = Blog::where('category_id', $categoryId)->where('active', '1')->where('type', 'blog')->get();
            return view('web.cms.blog', compact('results', 'categoryName'));
        } catch (\Exception $e) {
            dd($e);
            logger($e->getMessage());
            logger($e->getTraceAsString());
            return redirect()->back()->withFail('Error Oops somethings wents wrong.');
        }
    }
}
