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
    public function report()
    {
        $seo_id = "/report-hub";
        $seo_name = "Xcellent Insights Report Hub";
        $results = Category::all();

        $reports = Report::where('active', '1')->paginate(10);
        $count = 10;
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
}
