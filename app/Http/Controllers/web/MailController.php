<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Mail\GetInTouch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Lead;
use App\Models\Leadtype;



class MailController extends Controller
{
    public function getInTouch(Request $request)
    {

        $lead_row = Lead::create($request->all());
        $lead_row->name=$request->fname.' '.$request->lname;
        $lead_row->ip = $request->ip();
        $lead_row->save();


        $form_data['Subject'] =  $request->get('subject');
        $form_data['Name'] =  $request->get('fname') . ' ' . $request->get('lname');
        $form_data['Email'] =  $request->get('email');
        $form_data['Number'] =  $request->get('number');
        $form_data['Job_Title'] =  $request->get('job_title');
        $form_data['Company'] =  $request->get('company');
        $form_data['Description'] =  $request->get('description');

        Mail::to("rutvika.parwal@candorworks.com")->send(new GetInTouch($form_data));

        return back()->withInput();
    }
}
