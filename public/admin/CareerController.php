<?php

namespace App\Http\Controllers\web;
use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\career;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class CareerController extends Controller
{
    public Function showCareer(Request $request){
        $jobs=Job::where(['active'=>'1'])->get();
        return view('web.career.career',compact('jobs'));
    }

    public function careerApply(Request $request){
        // dd($request->all());
        $request->validate([
            'resume_file'  => 'required|mimes:doc,docx,pdf,txt|max:2048',
          ]);
        $career = new career();
        $career->job_id=$request->job_id;
        $career->job_title=job::find($request->job_id)->title;
        $career->name=$request->name;
        $career->email=$request->email;
        $career->resume_title=$request->resume_title;
        $career->msg=$request->msg;
        $destinationPath = 'public/file/'; // upload path
        $profilefile = date('YmdHis') .rand(). "." . $request->resume_file->getClientOriginalExtension();
        $request->resume_file->move($destinationPath, $profilefile);
        $career->resume_file = "$profilefile";
        $career->save();
        return back()->with('success', 'Your Request successfully submitted');
    }
}
