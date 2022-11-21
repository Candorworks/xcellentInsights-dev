<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Report;
use App\Models\Blog;
use App\Models\Job;
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

    public function home(){

        $results = Category::all();
        return view('web.home' , compact('results'));
    }

    public function industry(){
        $results = Category::all();
        return view('web.industry.industry' , compact('results'));
    }

    public function report(){
        
        $results = Category::all();
        $reports = Report::all();
        return view('web.report.report' , compact('results' ,'reports'));
    }

    public function partner(){
        return view('web.partner');
    }

    public function about(){
        return view('web.about');
    }

    public function career(){
        $results = Job::all();
        return view('web.career.career' , compact('results'));
    }

    public function team(){
        return view('web.career.team');
    }

    public function contact(){
        return view('web.contact');
    }

    public function blog($categoryName=null)
    {
        $results=Blog::where('active','1')->get();
        return view('web.cms.blog', compact('results','categoryName'));
    }

    public function blog_details(Request $request, $blog_slug){  
        $categories=Category::where('active','1')->get(); 
        $results=Blog::orderBy('id','desc')->where('active','1')->where('type','Blog')->limit(5)->get();
        $blog =Blog::where("slug",$blog_slug)->first();
        return view('web.cms.singleBlog',compact('blog' , 'results' , 'categories'));
    }
}
