<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ReportExportAll;
use App\Http\Controllers\Controller;
use App\Models\Lead;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use DB;
class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * reportsRelatedExport
     */
    function reportsRelatedExport(Request $request){
        $export_column =[
            'id',
            'lead_type',
            'report_id',
            'report_name',
            'date',
            'category',
            'report_url',
            'publisher_name',
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
        $collection=Lead::with(['leadtype', 'report', 'report.category', 'report.publisher'])->where(function($query)use($request){
            if($request->report_ids){
                $query->whereIn('id',explode(',',$request->report_ids));
            }
        })->whereIn('lead_type',[6,7,8,9])
        ->get()
        ->map(function($lead){
            $lead['category'] = isset($lead->report->category) ? $lead->report->category->name : '';
            return $lead;
        });

        return Excel::download(new ReportExportAll($collection,$export_column), 'lead-report.xlsx');
    }

    public function reportsRelated()
    {
       $list=Lead::whereIn('lead_type',[6,7,8,9])->orderBy('created_at','desc')->get();
       return view('admin.lead.reports',compact('list'));
    }

    public function forms()
    {
        $list=Lead::with('leadtype')->whereIn('lead_type',[1,2,4,5])->orderBy('created_at','desc')->get();
        // dd($list);
       return view('admin.lead.forms',compact('list'));
    }

    public function partner()
    {
        $list=Lead::with('leadtype')->whereIn('lead_type',[3])->orderBy('created_at','desc')->get();
       return view('admin.lead.partner',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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
    }

    
    public function deleteFormLeads(Request $request) {

    }

    public function deleteReportLeads(Request $request){

    }

    public function multiReportLeadsDelete(Request $request)
    {
       // dd($request->all());
       DB::beginTransaction();
       try{
            Lead::whereIn('id', explode(',',$request->report_ids))->delete();
            DB::commit();
            return redirect()->back()->with('success','Report Leads deleted successfully.');
       }catch(\Exception $e){
            logger($e->getMessage());
            logger($e->getTraceAsString());
            DB::rollback();
            return redirect()->back()->with('fail','Oops! sometings wends wrong.');
       }
        
    }

    public function multiFormLeadsDelete(Request $request)
    {
        DB::beginTransaction();
        try{
            Lead::whereIn('id', explode(',',$request->report_ids))->delete();
            DB::commit();
            return redirect()->back()->with('success','Form Leads deleted successfully.');
        }catch(\Exception $e){
            logger($e->getMessage());
            logger($e->getTraceAsString());
            DB::rollback();
            return redirect()->back()->with('fail','Oops! sometings wends wrong.');
        }
        
    }
}
