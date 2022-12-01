<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Report;
use App\Models\Job;
use App\Models\Cms;
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
            $count = $reports->count();
            // dd($count);
            return view('web.report.report', compact('results', 'reports', 'categoryName' , 'count'));
        } catch (\Exception $e) {
            logger($e->getMessage());
            logger($e->getTraceAsString());
            return redirect()->back()->withFail('Error Oops somethings wents wrong.');
        }
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

    public function sitemap(){
        $categories = Category::all();
        return view('web.cms.sitemap' , compact('categories'));
    }
}
