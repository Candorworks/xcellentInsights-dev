<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\Job;
class JobsController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:jobs-list|jobs-create|jobs-edit|jobs-delete', ['only' => ['index','store']]);
         $this->middleware('permission:jobs-create', ['only' => ['create','store']]);
         $this->middleware('permission:jobs-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:jobs-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list=Job::all();
        return view('admin.job.list',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.job.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required','max:255'],
            'location' => ['required'],
            'no_vacancy' => ['required'],
            'experience' => ['required'],
            'description' => ['required'],
            'roles' => ['required'],
            'active' => ['required'],
        ]);
        $job= new Job();
        $job->title=$request->title;
        $job->location=$request->location;
        $job->no_vacancy=$request->no_vacancy;
        $job->experience=$request->experience;
        $job->description=$request->description;
        $job->roles=$request->roles;
        $job->active=$request->active;
        $job->save();
        return redirect()->route('jobs.index')->withSuccess('New Job added successfully.');
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
        $job=Job::find($id);
        return view('admin.job.edit',compact('job'));
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
        $validatedData = $request->validate([
            'title' => ['required','max:255'],
            'location' => ['required'],
            'no_vacancy' => ['required'],
            'experience' => ['required'],
            'description' => ['required'],
            'roles' => ['required'],
            'active' => ['required'],
        ]);
        $job=Job::find($id);
        $job->title=$request->title;
        $job->location=$request->location;
        $job->no_vacancy=$request->no_vacancy;
        $job->experience=$request->experience;
        $job->description=$request->description;
        $job->roles=$request->roles;
        $job->active=$request->active;
        $job->save();
        return redirect()->route('jobs.index')->withSuccess('Job updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Job::find($id)->delete();
        return redirect()->route('jobs.index')->withSuccess('Job deleted successfully.');
    }

    /**
     * careerList
     */
    public function careerList(Request $request){
        $careers=Career::orderBy('id','desc')->get();
        return view('admin.job.career',compact('careers'));
    }
}
