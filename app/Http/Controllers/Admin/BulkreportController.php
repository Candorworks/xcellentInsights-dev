<?php

namespace App\Http\Controllers\Admin;

use App\Exports\Report as ExportsReport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exports\ReportExport;
use App\Exports\ReportExportAll;
use App\Exports\Reports;
use App\Imports\ReportImport;
use App\Models\Report;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

class BulkreportController extends Controller
{
    //

    public function bulkReports()
    {
        return view('admin.report.bulk_report');
    }

    public function exportReortsAll(Request $request)
    {
        ini_set('max_execution_time', '500');
        $export_column =[
            'report_id',
            'unique_id',
            'category',
            'publisher',
            'meta_title',
            'meta_description',
            'title',
            'url_title',
            'report_uri',
            'format',
            's_l_price',
            'm_l_price',
            'e_l_price',
            'pages',
            'active',
            'publish_date',
            'sample_url',
            'discount_url',
            'buying_url',
            'purchase_url',
        ];
        $collection=Report::where(function($query)use($request){
            if($request->report_ids){
                $query->whereIn('id',explode(',',$request->report_ids));
            }
        })->with([
            'category:id,name', 'publisher:id,name'
        ])->orderBy('id', 'desc')->get([
            'id','unique_id','title','slug','category_id', 'publisher_id', 'publish', 'meta_title', 'meta_desc', 'url_title', 'format', 'single_price', 'multi_price', 'enterprise_price', 'pages', 'active'
        ]);
        
        return Excel::download(new Reports($collection,$export_column), 'all-report.xlsx');
    }

    function markTopSellingReports(Request $request){
        $this->validate($request, [
            'report_ids' => 'required'
        ], [
            'report_ids.required' => 'Please Select Reports.'
        ]);
        DB::beginTransaction();
        try {
            Report::whereIn('id', explode(',',$request->get('report_ids')))->update([
                'top_selling' => 1
            ]);
            DB::commit();
            return redirect()->back()->withSuccess('Reports successfully marked as Top-Selling');
        } catch(\Throwable $e){
            report($e);
            DB::rollBack();
            logger($e->getMessage());
            logger($e->getTraceAsString());
            return redirect()->back()->withFail("Error!");
        }
    }

    function unmarkTopSellingReports(Request $request){
        $this->validate($request, [
            'report_ids' => 'required'
        ], [
            'report_ids.required' => 'Please Select Reports.'
        ]);
        DB::beginTransaction();
        try {
            Report::whereIn('id', explode(',',$request->get('report_ids')))->update([
                'top_selling' => 0
            ]);
            DB::commit();
            return redirect()->back()->withSuccess('Removed Top-Selling mark from reports.');
        } catch(\Throwable $e){
            report($e);
            DB::rollBack();
            logger($e->getMessage());
            logger($e->getTraceAsString());
            return redirect()->back()->withFail("Error!");
        }
    }

    public function exportReortsSample()
    {
        return Excel::download(new ReportExport, 'sample-report.xlsx');
    }

    public function importReortsSheet(Request $request)
    {
        ini_set("memory_limit", "1024m");
	ini_set('post_max_size', '1024m');
	ini_set('upload_max_filesize', '1024m');

        if(!empty($request->file('sheet'))){
            Excel::import(new ReportImport, $request->file('sheet'));
            return back()->with('success', 'Success !!! Excel sheet imported successfully.');
        }

        return back()->with('fail', 'Error !!! Excel sheet not found.');
        
    }
}
