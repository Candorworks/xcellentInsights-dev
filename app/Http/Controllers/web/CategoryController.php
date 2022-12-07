<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Report;
use DB;

class CategoryController extends Controller
{
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
        $count = $reports->count();
        $results = Category::all();

        $seo_id = "/category/".$categories->slug;
        $seo_name = $categories->name . " Industry";

        return view('web.report.report', compact('categories', 'results', 'reports' , 'count' , 'seo_id' , 'seo_name'));
    }
}
