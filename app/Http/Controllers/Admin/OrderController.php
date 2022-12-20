<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ReportExportAll;
use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Paymenthistory;
use Maatwebsite\Excel\Facades\Excel;
use DB;
class OrderController extends Controller
{
    //

        public function list(Request $request) {
            $data=$request->all();
            $countries=Country::all();
            if(empty($data)){
                $list = Order::orderBy('id','desc')->get();
            }else{
                $list = Order::where(function($query)use ($request){
                    if($request->report_id){
                        $query->where('report_id',$request->report_id);
                    }
                    if($request->order_id){
                        $query->where('order_id',$request->order_id);
                    }
                    
                    if($request->customer_name){
                        $query->where('name',$request->customer_name);
                    }
                    if($request->email){
                        $query->where('email',$request->email);
                    }
                    if($request->customer_number){
                        $query->where('number',$request->customer_number);
                    }
                    if($request->country){
                        $query->where('country',$request->country);
                    }
                    if($request->job_title){
                        $query->where('job_title',$request->job_title);
                    }
                    if($request->plan){
                        $query->where('plan',$request->plan);
                    }
                    if($request->plan_price){
                        $query->where('plan_price',$request->plan_price);
                    }
                    if($request->payment_status){
                        $query->where('payment_status',$request->payment_status);
                    }
                    if($request->from_date && $request->till_date){
                        $query->whereBetween('created_at',[$request->from_date,$request->till_date]);
                    }
                    
                })->orderBy('id','desc')->get();
            }
         //echo"<pre>";var_dump($list);die;
           
           return view('admin.order.list',compact('list','data','countries'));
        }
        /**
         * exportOrder
         */
        function exportOrder(Request $request){
            $export_column =[
                'order_id',
                'report_id',
                'name',
                'email',
                'number',
                'country',
                'company',
                'job_title',
                'address',
                'city',
                'state',
                'zip',
                'plan',
                'plan_price',
                'discount_price',
                'final_price',
                'payment_status',
                
            ];
            $collection=Order::where(function($query)use($request){
                if($request->report_ids){
                    $query->whereIn('id',explode(',',$request->report_ids));
                }
            })->get($export_column);
            return Excel::download(new ReportExportAll($collection,$export_column), 'order-report.xlsx');
        }

    public function multiOrderListDelete(Request $request)
    {
        return redirect()->back()->with('success','Order List deleted successfully.');
       // dd($request->all());
        /*
        DB::beginTransaction();
        try{
            Order::whereIn('id', explode(',',$request->report_ids))->delete();
            Paymenthistory::whereIn('order_id', explode(',',$request->report_ids))->delete();
            DB::commit();
            return redirect()->back()->with('success','Order List deleted successfully.');
            }
        catch(\Exception $e){
            logger($e->getMessage());
            logger($e->getTraceAsString());
            DB::rollback();
           return redirect()->back()->with('fail','Oops! sometings wends wrong.');
        }
        */
         
    }

    public function orderActiveList(Request $request)
    {
        $data=$request->all();
            $countries=Country::all();
            if(empty($data)){
                $list = Order::orderBy('id','desc')->where('active',"1")->get();
            }else{
                $list = Order::where('active',"1")->where(function($query)use ($request){
                    if($request->report_id){
                        $query->where('report_id',$request->report_id);
                    }
                    if($request->order_id){
                        $query->where('order_id',$request->order_id);
                    }
                    
                    if($request->customer_name){
                        $query->where('name',$request->customer_name);
                    }
                    if($request->email){
                        $query->where('email',$request->email);
                    }
                    if($request->customer_number){
                        $query->where('number',$request->customer_number);
                    }
                    if($request->country){
                        $query->where('country',$request->country);
                    }
                    if($request->job_title){
                        $query->where('job_title',$request->job_title);
                    }
                    if($request->plan){
                        $query->where('plan',$request->plan);
                    }
                    if($request->plan_price){
                        $query->where('plan_price',$request->plan_price);
                    }
                    if($request->payment_status){
                        $query->where('payment_status',$request->payment_status);
                    }
                    if($request->from_date && $request->till_date){
                        $query->whereBetween('created_at',[$request->from_date,$request->till_date]);
                    }
                    
                })->orderBy('id','desc')->get();
            }
                    
           return view('admin.order.activelist',compact('list','data','countries'));

    }

     public function orderInactiveList(Request $request)
    {
        $data=$request->all();
            $countries=Country::all();
            if(empty($data)){
                $list = Order::orderBy('id','desc')->where('active','0')->get();
            }else{
                $list = Order::where('active','0')->where(function($query)use ($request){
                    if($request->report_id){
                        $query->where('report_id',$request->report_id);
                    }
                    if($request->order_id){
                        $query->where('order_id',$request->order_id);
                    }
                    
                    if($request->customer_name){
                        $query->where('name',$request->customer_name);
                    }
                    if($request->email){
                        $query->where('email',$request->email);
                    }
                    if($request->customer_number){
                        $query->where('number',$request->customer_number);
                    }
                    if($request->country){
                        $query->where('country',$request->country);
                    }
                    if($request->job_title){
                        $query->where('job_title',$request->job_title);
                    }
                    if($request->plan){
                        $query->where('plan',$request->plan);
                    }
                    if($request->plan_price){
                        $query->where('plan_price',$request->plan_price);
                    }
                    if($request->payment_status){
                        $query->where('payment_status',$request->payment_status);
                    }
                    if($request->from_date && $request->till_date){
                        $query->whereBetween('created_at',[$request->from_date,$request->till_date]);
                    }
                    
                })->orderBy('id','desc')->get();
            }
                    
           return view('admin.order.inactivelist',compact('list','data','countries'));
        
    }

    public function orderActive(Request $request)
    {
        $this->validate($request, [
            'report_ids' => 'required'
        ], [
            'report_ids.required' => 'Please Select Order Report.'
        ]);
        DB::beginTransaction();
        try {
            Order::whereIn('id', explode(',',$request->get('report_ids')))->update([
                'active' =>"0"
            ]);
            DB::commit();
            return redirect()->back()->withSuccess('Order status change active to inactive.');
        }catch(\Exception $e)
        {
            logger($e->getMessage());
            logger($e->getTraceAsString());
            return redirect()->back()->withFail("Error!");
        }

    }

    public function orderInactive(Request $request)
    {
        $this->validate($request, [
            'report_ids' => 'required'
        ], [
            'report_ids.required' => 'Please Select Order Report.'
        ]);
        DB::beginTransaction();
        try {
            //logger($request->input());
            Order::whereIn('id', explode(',',$request->get('report_ids')))->update([
                'active' =>"1"
            ]);
            
            DB::commit();
            return redirect()->back()->withSuccess('Order status change inactive to active.');
        }catch(\Exception $e)
        {
            logger($e->getMessage());
            logger($e->getTraceAsString());
            return redirect()->back()->withFail("Error!");
        }

    }

}
