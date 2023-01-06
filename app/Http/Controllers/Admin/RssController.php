<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RssData;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RssController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = RssData::all();
        return view('admin.rss.rss_list', compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rss.rss_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'rssdescription' => 'required',
            'pr' => 'required',
        ]);

        DB::beginTransaction();
        try {

            // $slug = Str::slug($request->get('title'));
            // if((new RssData)->where('url', $slug)->count() > 0) {
            //     return redirect()->route('admin.rss.rss_add')->withFail('Duplicate RSS.');
            // }

            $data = $request->all();
            $data['active'] = $request->active ? "0" : "1";
            $data['description'] = $request->rssdescription;

            // dd($data);
            $rss_row = RssData::create($data);

            // dd($rss_row);
            $rss_row->url = $request->url.'-'.$rss_row->id;
            $rss_row->save();
            DB::commit();

            return redirect()->route('rss.index')
                ->withSuccess('RSS Feed Added successfully.');

        } catch (\Throwable $e) {
            report($e);
            // dd($e);
            DB::rollBack();
            return redirect()->route('rss.create')
                ->withFail('Failed to add RSS Feed.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($pr_slug)
    {
       // dd($pr_slug);
       print_r($pr_slug);die;
        $results =RssData::where("id",$pr_slug)->first();
        return view('web.press-release-detail' , compact('results'));
    }
    public function showinfo($slug)
    {
       // dd($pr_slug);
      // print_r($id);die;
        $results =RssData::where("url",$slug)->first();
        return view('web.press-release-detail' , compact('results'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(RssData $rss)
    {
        // dd($rss);
        // $result = $results;
        return view('admin.rss.rss_add', compact('rss'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RssData $rss)
    {

        $this->validate($request, [
            'title' => 'required',
            'rssdescription' => 'required',
            'pr' => 'required',
        ]);
        
        DB::beginTransaction();
        try {
            // $rss = RssData::findOrFail($id);
            // dd($request);
            $rss->title = $request->title;
            $slug = Str::slug($request->get('title'));
            if((new RssData())->where('url', $slug)->where('id', '!=', $rss->id)->count() > 0) {
                return redirect()->back()->withFail('Duplicate RSS.');
            }
            $rss->url = $slug;
            // $rss->url = $request->url;
            $rss->description = $request->rssdescription;
            $rss->pr = $request->pr;
            $rss->active = $request->active ? "0" : "1";
            // dd($rss);
            $rss->save();
            DB::commit();
            return redirect()->route('rss.index')
                ->withSuccess('RSS Feed Updated successfully.');
        } catch (\Throwable $e) {
            report($e);
            // dd($e);
            DB::rollBack();
            return redirect()->route('rss.create')
                ->withFail('Failed to update RSS Feed.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            RssData::find($id)->delete();
            DB::commit();
            return redirect()->route('rss.index')
                ->withSuccess('RSS deleted successfully');
        } catch (\Throwable $e) {
            report($e);
            DB::rollBack();
            return redirect()->route('rss.index')
                ->withFail('Failed to Delete RSS Feed.');
        }
    }


    public function getxml()
    {

        $results = RssData::all();
        return response()->view('admin.rss.rss_xml', [
            'results' => $results
        ])->header('Content-Type', 'text/xml');
    }

    public function press_release(){
        $results = RssData::all();
        return view('web.press-release' , compact('results'));
    }
}
