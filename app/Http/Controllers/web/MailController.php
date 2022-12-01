<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Mail\CareerMail;
use App\Mail\GetInTouch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Lead;
use App\Models\Leadtype;
use App\Models\Newsletter;
use App\Models\Report;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;



class MailController extends Controller
{
    public function getInTouch(Request $request)
    {

        $lead_row = Lead::create($request->all());
        // dd($request->input());

        $lead_row->name = $lead_row->name == null ? $request->fname . ' ' . $request->lname : $request->name;
        $lead_row->ip = $request->ip();
        $lead_row->save();



        $leadtype = Leadtype::select('id', 'name')->where('id', $lead_row->lead_type)->first();
        $lead_name = $leadtype->name;

        $report = Report::select('unique_id', 'title', 'slug')->where('id', $lead_row->report_id)->first();
        $report_title = $report == null ? null : $report->title;
        $report_unique_id = $report == null ? null : $report->unique_id;
        $report_slug = $report == null ? null : $report->slug;

        Mail::to("rutvika.parwal@candorworks.com")->send(new GetInTouch($lead_row, $lead_name, $report_title, $report_slug, $report_unique_id));

        return redirect()->route('web.form.thankyou')->with('success', 'Your Request successfull submitted');
    }

    public function thankyou()
    {

        if (Session::has('success')) {
            return view('web.thankyou');
        }
        return redirect()->route('home');
    }

    public function error()
    {

        if (Session::has('error')) {
            return view('web.wrong');
        }
        return redirect()->route('home');
    }

    public function subscribe(Request $request)
    {
        $email = Newsletter::where('email', $request->email)->where('active', '1')->first();
        // dd($email != null);


        if ($email != null) {
            return response()->json(['status' => '422', 'length' => 1]);
        } else {
            DB::beginTransaction();
            try {
                $newsletter = new Newsletter();
                $newsletter->email = $request->get('email');
                $newsletter->active = "1";
                $newsletter->save();
                DB::commit();
                return response()->json(['status' => '200', 'length' => 0]);
            } catch (\Throwable $e) {
                dd($e);
                report($e);
                DB::rollBack();
                return redirect()->route('home')->withFail('Error');
            }
        }
    }

    public function career_mail(Request $request)
    {
        $career_row = $request->all();

        $file = $request->file('resume_file');
        $destinationPath = 'web/resume/';
        $originalFile = $file->getClientOriginalName();
        $filename = strtotime(date('Y-m-d-H:isa')) . $originalFile;
        $file->move($destinationPath, $filename);

        Mail::to("rutvika.parwal@candorworks.com")->send(new CareerMail($career_row));
        Mail::to($request->email)->send(new CareerMail($career_row));
        return redirect()->route('career');
    }
}
