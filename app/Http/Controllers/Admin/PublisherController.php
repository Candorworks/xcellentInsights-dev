<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:publisher-list|publisher-create|publisher-edit|publisher-delete', ['only' => ['index','store']]);
         $this->middleware('permission:publisher-create', ['only' => ['create','store']]);
         $this->middleware('permission:publisher-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:publisher-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list=Publisher::all();
        return view('admin.publisher.list2',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.publisher.add');
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
            'name' => 'required|unique:publishers|max:255',
            'sort_name' => 'required|unique:publishers|max:255',
        ]);
        $job= new Publisher();
        $job->name=$request->name;
        $job->sort_name=$request->sort_name;
        $job->save();
        return redirect()->route('publisher.index')->withSuccess('New Publisher added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publisher  $publisher
     * @return \Illuminate\Http\Response
     */
    public function show(Publisher $publisher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Publisher  $publisher
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job=Publisher::find($id);
        return view('admin.publisher.edit',compact('job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Publisher  $publisher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:publishers,name,'.$id,
            'sort_name' => 'required|unique:publishers,sort_name,'.$id,
        ]);
        $job= Publisher::find($id);
        $job->name=$request->name;
        $job->sort_name=$request->sort_name;
        $job->save();
        return redirect()->route('publisher.index')->withSuccess('Publisher update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publisher  $publisher
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Publisher::find($id)->delete();
        return redirect()->route('publisher.index')->withSuccess('Publisher deleted successfully.');
    }
}
