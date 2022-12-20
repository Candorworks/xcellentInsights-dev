<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Newsletter;
use App\Models\Publisher;
use App\Models\Report;
use App\Imports\ReportImport;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Exports\ReportExportAll;
use App\Models\DiscountLead;
use App\Models\Lead;
use Maatwebsite\Excel\Facades\Excel;
use DB;
class ReportController extends Controller
{


    /**
     * get All Newsletetr Subscribe
     */
    public function subscribeList(Request $request){
        $list=Newsletter::orderBy('id','desc')->get();
        return view('admin.newsletter.list',compact('list'));

    }
    /**
     * exportNewsLetter
     */
    function exportNewsLetter(Request $request){
        $export_column =[
            'email',
            'subscribe',
            'created_at',
            
        ];
        $collection=NewsLetter::where(function($query)use($request){
            
        })->get($export_column);
        return Excel::download(new ReportExportAll($collection,$export_column), 'newsletter-report.xlsx');
    }
    /**
     * exportLeadForm
     */
    function exportLeadForm(Request $request){
        $export_column =[
            'lead_type',
            'report_id',
            'name',
            'email',
            'website',
            'country',
            'number',
            'description',
            'company',
            'job_title',
            'reports_no',
            'new_publications',
            'ip',
            
        ];
        $collection=Lead::with(['report'])->where(function($query)use($request){
            
        })->whereIn('lead_type',[1,2,4,5])->whereIn('id',explode(',',$request->report_ids))->get($export_column);
        return Excel::download(new ReportExportAll($collection,$export_column), 'lead-form.xlsx');
    }
    /**
     * exportLeadPartner
     */
    function exportLeadPartner(Request $request){
        $export_column =[
            'lead_type',
            'report_id',
            'name',
            'email',
            'website',
            'country',
            'number',
            'description',
            'company',
            'job_title',
            'reports_no',
            'new_publications',
            'ip',
            
        ];
        $collection=Lead::with(['report'])->where(function($query)use($request){
            
        })->whereIn('lead_type',[3])->whereIn('id',explode(',',$request->report_ids))->get($export_column);
        return Excel::download(new ReportExportAll($collection,$export_column), 'lead-partner.xlsx');
    }
    /**
     * exportdiscountList
     */
    function exportdiscountList(Request $request){
        $export_column =[
            'report_id',
            'email',
            'plan',
            'link',
            'status',
            'type',
            'discount_value',
            
            
        ];
        $collection=DiscountLead::with(['report'])->with(['report'])->where(function($query)use($request){
            
        })->whereIn('id',explode(',',$request->report_ids))->get($export_column);
        return Excel::download(new ReportExportAll($collection,$export_column), 'lead-discount.xlsx');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $list=Report::with(['category'=>function($q){
            $q->select('id','name');
        },'subcategory'=>function($q){
            $q->select('id','name');
        },'publisher'=>function($q){

        }])->orderBy('id','desc')->where(function($query)use($request){
            if($request->title){
                $query->where('title','like','%'.$request->title.'%');
                $query->orwhere('unique_id','like','%'.$request->title.'%');
            }

        })->paginate(1000);
        // dd($list);
        return view('admin.report.list',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::query()
        ->with('SubCategory')
        ->get()
        ->where('parent_id','0')
        ->groupBy('id')->toArray();
        $publishers=Publisher::all();
        return view('admin.report.add',compact('categories','publishers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            // 'thumbnail'  => 'required|mimes:png,jpg,jpeg,gif,webp|max:2048',
            // 'sample_pdf'  => 'required|mimes:doc,docx,pdf,txt|max:2048|unique:reports',
            // 'pdf'  => 'required|mimes:doc,docx,pdf,txt|max:2048|unique:reports',
            'title'=>'required',
            'meta_title'=>'required',
            'meta_desc'=>'required',
            'category_id'=>'required',
            'format'=>'required',
            'pages'=>'required',
            'single_price'=>'required',
            'description'=>'required',
            'toc'=>'required',
            'table_figures'=>'required',
            'companies'=>'required',
            'active'=>'required',
        ]);


        $data=$request->all();
        $data['unique_id']='MN'.time();
        //find category
        $category = Category::find($request->category_id);
        
        if($category->thumbnail != null){
            $data['thumbnail']=$category->thumbnail;
        }
       
        // if($request->sample_pdf){
        //     $data['sample_pdf']=$this->upload($request->sample_pdf);
        // }
        // if($request->pdf){
        //     $data['pdf']=$this->upload($request->pdf);
        // }

        $data['publish']=date('Y-m-d',strtotime($request->publish));
        $data['url_title']=$request->url_title;
        $report_row = Report::create($data);

        // update unique id
        $publishers=Publisher::find($request->publisher_id);
        // dd($publishers);
        $report_row->unique_id  = $publishers->sort_name.$report_row->id;
        $report_row->slug    = Str::slug($request->url_title).'-'.$report_row->id;
        $report_row->save();
        return redirect()->route('reports.index')->withSuccess('Report added successfully.');
    }

    public function upload($file){
        $destinationPath = 'public/file/'; // upload path
        $profilefile = time(). "." . $file->getClientOriginalExtension();
        $file->move($destinationPath, $profilefile);
        return 'public/file/'.$profilefile;
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
        $categories=Category::query()
        ->with('SubCategory')
        ->get()
        ->where('parent_id','0')
        ->groupBy('id')->toArray();
        $report=Report::find($id);
        $publishers=Publisher::all();
        return view('admin.report.edit',compact('report','categories','publishers'));
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
        $request->validate([
            'title'=>'required',
            'category_id'=>'required',
            'format'=>'required',
            'pages'=>'required',
            'single_price'=>'required',
            'description'=>'required',
            'toc'=>'required',
            'table_figures'=>'required',
            'companies'=>'required',
            'active'=>'required',
        ]);
        $data=$request->except(['_method','_token']);
        // if($request->file('thumbnail')){
        //     $request->validate([
        //         'thumbnail'  => 'required|mimes:doc,docx,pdf,txt|max:2048',
        //     ]);
        //     $data['thumbnail']=$this->upload($request->thumbnail);
        // }
        if($request->file('sample_pdf')){
            $request->validate([
                'sample_pdf'  => 'required|mimes:doc,docx,pdf,txt|max:2048',
            ]);
            $data['sample_pdf']=$this->upload($request->sample_pdf);
        }
        if($request->file('pdf')){
            $request->validate([
                'pdf'  => 'required|mimes:doc,docx,pdf,txt|max:2048',
            ]);
            $data['pdf']=$this->upload($request->pdf);
        }

        // $data['unique_id']='MN'.time();



        $data['publish']=date('Y-m-d',strtotime($request->publish));
        
        $data['url_title']=$request->url_title;
        $data['slug']    = Str::slug($request->url_title).'-'.$id;
        $category = Category::find($request->category_id);
        
        if($category->thumbnail != null){
            $data['thumbnail']=$category->thumbnail;
        }
        Report::where('id',$id)->update($data);
       
        return redirect()->route('reports.index')->withSuccess('Report updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $Report = Report::find($id);
        $Report->delete();
        return redirect()->route('reports.index')->withSuccess('Report deleted successfully.');
    }

    public function multiReportDelete(Request $request)
    {
        // dd($request->all());
        DB::beginTransaction();
        try{
            Report::whereIn('id', explode(',',$request->report_ids))->delete();
            DB::commit();
            return redirect()->back()->with('success','Report deleted successfully.');
        }catch(\Exception $e){
            logger($e->getMessage());
            logger($e->getTraceAsString());
            DB::rollback();
            return redirect()->back()->with('fail','Oops! sometings wends wrong.');
        }
    }
    /**
     * Report Export
     */
    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function uploadCsvFile(Request $request)
    {
        $rules=[
            'importcsv'=>'required|mimetypes:text/csv,text/plain,application/csv,text/comma-separated-values,text/anytext,application/octet-stream,application/txt'
        ];

        $message=[
            'importcsv.required'=>'Please select csv file',
            'importcsv.mimes'=>'Only .csv files are allowed'
        ];
        $this->validate($request,$rules,$message);
        try{
            $r=new Report();
            $rep=collect(Excel::toArray(new ReportImport,$request->file('importcsv'))[0]);
            $reportIds=$rep->pluck('report_ids');
            $reportTitle=$rep->pluck('report_title');
          
            if($reportIds->count() > 0)
            {
                $r=$r->orwhereIn('id',$reportIds);
            }
            if($reportTitle->count() > 0){
                $r=$r->orwhereIn('title',$reportTitle);
            }
                  
           // $r=Report::whereIn('id',$reportIds)->orwhereIn('title',$reportTitle);
           // dd($r->paginate(10));
            $list=$r->with(['category'=>function($q){
                $q->select('id','name');
            },'subcategory'=>function($q){
                $q->select('id','name');
            },'publisher'=>function($q){

            }])->orderBy('id','desc')->where(function($query)use($request){
                if($request->title){
                    $query->where('title','like','%'.$request->title.'%');
                    $query->orwhere('unique_id','like','%'.$request->title.'%');
                }

            })->paginate(1000);

           
            return view('admin.report.list',compact('list'));
        }catch(\Exception $e)
        {
            logger($e->getMessage());
            logger($e->getTraceAsString());
            return redirect()->back()->with('fail','Oops! sometings wends wrong.');

        }

    }

    public function downloadSampleCsv()
    {
        
        return response()->download(public_path() . '/XISampleSearch.csv');
    }

}

