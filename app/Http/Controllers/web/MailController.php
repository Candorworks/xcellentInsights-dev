<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Mail\GetInTouch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Lead;
use App\Models\Leadtype;
use App\Models\Report;
use Session;



class MailController extends Controller
{
    public function getInTouch(Request $request)
    {

        $lead_row = Lead::create($request->all());
        // dd($request->input());

        $lead_row->name=$request->fname.' '.$request->lname;
        $lead_row->ip = $request->ip();
        $lead_row->save();

        

        $leadtype = Leadtype::select('id' , 'name')->where('id' , $lead_row->lead_type)->first();
        $lead_name = $leadtype->name;

        $report = Report::select('unique_id' , 'title' , 'slug')->where('id' , $lead_row->report_id)->first();
        $report_title = $report==null?null:$report->title;
        $report_unique_id = $report==null?null:$report->unique_id;
        $report_slug = $report==null?null: $report->slug;

        Mail::to("rutvika.parwal@candorworks.com")->send(new GetInTouch($lead_row , $lead_name , $report_title , $report_slug , $report_unique_id));

        return redirect()->route('web.form.thankyou')->with('success','Your Request successfull submitted');
    }

    public function thankyou(){
      
        if(Session::has('success')){
            return view('web.thankyou');
        }
        return redirect()->route('home');
    }

    public function error(){
      
        if(Session::has('error')){
            return view('web.wrong');
        }
        return redirect()->route('home');
    }
}
