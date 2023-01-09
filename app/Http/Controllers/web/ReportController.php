<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Report;
use App\Models\Country;
use App\Models\Licences_types;
use App\Models\Leadtype;
use DB;

class ReportController extends Controller
{
    public function report(Request $request)
    {
        $seo_id = "/report-hub";
        $seo_name = "Xcellent Insights Report Hub";
        $results = Category::all();
        

        $reports = Report::where('active', '1')->paginate(10);
        $count =  $reports->count();

        $articles = '';
        if ($request->ajax()) {
            if(isset($request->search)){
                $reports = Report::select('id', 'slug', 'title', 'description', 'unique_id', 'publish', 'pages', 'single_price')->Where('title', 'like', '%' . $request->search . '%')->where('active','1')->orderBy('id','desc')->paginate(10);
            }else{
                $reports = Report::select('id', 'slug', 'title', 'description', 'unique_id', 'publish', 'pages', 'single_price')->where('active','1')->orderBy('id','desc')->paginate(10);
            }
            return view('web.report.report_div' , compact('results', 'reports' ,'count' , 'seo_id' , 'seo_name'));

            if($reports->count() == 0){
                $articles = false;
            }
            
            return $articles;
        }
        return view('web.report.report', compact('results', 'reports' ,'count' , 'seo_id' , 'seo_name'));
    }

    public function report_detail(Request $request, $report_slug)
    {
        $report = Report::where("slug", $report_slug)->whereIn('active', ['1', '2'])->first();
        if(is_null($report)) {
            abort(404);
        }
        $countries = Country::all();
        $license = Licences_types::all();

        $seo_id = "/" . $report->Category->name;
        return view('web.report.reportDetail', compact('report', 'countries' , 'license' , 'seo_id'));
    }

    public function enquiry_sample(Request $request, $report_id){
        $heading = "Request Sample";
        $leadtype = Leadtype::select('id' ,  'name')->where('name' , $heading)->first();
        $leadtype_id = $leadtype->id;
        $report = Report::where("id", $report_id)->first();
        $countries = Country::all();
        return view('web.report.enquiry' , compact('heading' , 'report' , 'countries' , 'leadtype_id'));
    }

    public function enquiry_buying(Request $request, $report_id){
        $heading = "Enquiry before Buying";
        $leadtype = Leadtype::select('id' ,  'name')->where('name' , $heading)->first();
        $leadtype_id = $leadtype->id;
        $report = Report::where("id", $report_id)->first();
        $countries = Country::all();
        return view('web.report.enquiry' , compact('heading' , 'report' , 'countries' , 'leadtype_id'));
    }

    public function enquiry_discount(Request $request, $report_id){
        $heading = "Check For Discount";
        $leadtype = Leadtype::select('id' ,  'name')->where('name' , $heading)->first();
        $leadtype_id = $leadtype->id;
        $report = Report::where("id", $report_id)->first();
        $countries = Country::all();
        return view('web.report.enquiry' , compact('heading' , 'report' , 'countries' , 'leadtype_id'));
    }

    public function checkout(Request $request, $report_id){
        $report = Report::where("id", $report_id)->first();
        $countries = Country::all();
        return view('web.report.checkout' ,compact('report' , 'countries'));
    }

    public function showReport(Request $request,$category_slug){
        $categories=Category::query()
        ->with('SubCategory')
        ->get()
        ->where('parent_id','0')
        ->where('vertical','1')
        ->where('active','1')
        ->sortBy('categories.name')->toArray();
        // $reports=Report::where([$type=>$id,'active'=>'1'])->get();
        $select_cat = Category::where('slug',$category_slug)->first();

        dd($select_cat);

        
        if(isset($request->search)){
            $results = Report::Where('title', 'like', '%' . $request->search . '%')->where('active','1')->orderBy('id','desc')->paginate(10);

        }else{
            $results = Report::where(["category_id"=>$select_cat->id,'active'=>'1'])->orderBy('id','desc')->paginate(10);
        }


        return view('web.report.report',compact('categories', 'select_cat'));
    }
}
