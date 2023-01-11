<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Report;
use App\Models\Country;
use App\Models\Licences_types;
use App\Models\Leadtype;
use App\Models\Order;
use App\Models\DiscountLead;

use DB;

class ReportController extends Controller
{
    public function report(Request $request)
    {
        $seo_id = "/report-hub";
        $seo_name = "Xcellent Insights Report Hub";
        $results = Category::all();


        $reports = Report::where('active', '1')->paginate(10);
        $count =  $reports->count();

        $articles = '';
        if ($request->ajax()) {
            if (isset($request->search)) {
                $reports = Report::select('id', 'slug', 'title', 'description', 'unique_id', 'publish', 'pages', 'single_price')->Where('title', 'like', '%' . $request->search . '%')->where('active', '1')->orderBy('id', 'desc')->paginate(10);
            } else {
                $reports = Report::select('id', 'slug', 'title', 'description', 'unique_id', 'publish', 'pages', 'single_price')->where('active', '1')->orderBy('id', 'desc')->paginate(10);
            }
            return view('web.report.report_div', compact('results', 'reports', 'count', 'seo_id', 'seo_name'));

            if ($reports->count() == 0) {
                $articles = false;
            }

            return $articles;
        }
        return view('web.report.report', compact('results', 'reports', 'count', 'seo_id', 'seo_name'));
    }

    public function report_detail(Request $request, $report_slug)
    {
        $report = Report::where("slug", $report_slug)->whereIn('active', ['1', '2'])->first();
        if (is_null($report)) {
            abort(404);
        }
        $countries = Country::all();
        $license = Licences_types::all();

        $seo_id = "/" . $report->Category->name;
        return view('web.report.reportDetail', compact('report', 'countries', 'license', 'seo_id'));
    }

    public function enquiry_sample(Request $request, $report_id)
    {
        $heading = "Request Sample";
        $leadtype = Leadtype::select('id',  'name')->where('name', $heading)->first();
        $leadtype_id = $leadtype->id;
        $report = Report::where("id", $report_id)->first();
        $countries = Country::all();
        return view('web.report.enquiry', compact('heading', 'report', 'countries', 'leadtype_id'));
    }

    public function enquiry_buying(Request $request, $report_id)
    {
        $heading = "Enquiry before Buying";
        $leadtype = Leadtype::select('id',  'name')->where('name', $heading)->first();
        $leadtype_id = $leadtype->id;
        $report = Report::where("id", $report_id)->first();
        $countries = Country::all();
        return view('web.report.enquiry', compact('heading', 'report', 'countries', 'leadtype_id'));
    }

    public function enquiry_discount(Request $request, $report_id)
    {
        $heading = "Check For Discount";
        $leadtype = Leadtype::select('id',  'name')->where('name', $heading)->first();
        $leadtype_id = $leadtype->id;
        $report = Report::where("id", $report_id)->first();
        $countries = Country::all();
        return view('web.report.enquiry', compact('heading', 'report', 'countries', 'leadtype_id'));
    }

    public function checkout(Request $request, $report_id , $discount_link='')
    {
        //   dd($request->all());
        $discount_row = (object)[];
        $report = Report::find($report_id);
        $plan = $request->license;
        
        $discount_price = 0;
        if ($discount_link != '') {
            $discount_row = discountlead::where('link', $discount_link)->where('report_id', $report_id)->first();
            if ($discount_row) {
                if ($discount_row->status != 'Active') {
                    Session::flash('fail', 'discount link has been expired.');
                }
            }
        }


        $report = Report::where("id", $report_id)->first();
        $countries = Country::all();
        $license = $request->license;
        
        return view('web.report.checkout', compact('report', 'countries', 'discount_link', 'discount_row' , 'license'));
    }

    public function showReport(Request $request, $category_slug)
    {
        $categories = Category::query()
            ->with('SubCategory')
            ->get()
            ->where('parent_id', '0')
            ->where('vertical', '1')
            ->where('active', '1')
            ->sortBy('categories.name')->toArray();
        // $reports=Report::where([$type=>$id,'active'=>'1'])->get();
        $select_cat = Category::where('slug', $category_slug)->first();

        dd($select_cat);


        if (isset($request->search)) {
            $results = Report::Where('title', 'like', '%' . $request->search . '%')->where('active', '1')->orderBy('id', 'desc')->paginate(10);
        } else {
            $results = Report::where(["category_id" => $select_cat->id, 'active' => '1'])->orderBy('id', 'desc')->paginate(10);
        }


        return view('web.report.report', compact('categories', 'select_cat'));
    }

    /**
     * When focused out on phone number on checkout page, this email is triggered.
     */
    public function sendEmailForOrderInCartAtCheckout(Request $request, Report $report)
    {
        $subject = "Order in Cart";

        $params = $request->all();
        $params['report'] = [
            "name" => $report->title,
            "link" => route('web.report.single', $report->slug)
        ];

        sendMail('enquiry@xcellentinsights.com', $subject, $params, 'order_in_cart');
    }

    /**
     * When checkout button is clicked on checkout page, this email is triggered.
     */
    public function sendEmailForOrderConfirmedCartAtCheckout(Request $request, Report $report)
    {
        $subject = "Order Confirmed";
        $params = [];
        $params['data'] = $request->collect()->except(['_token', 'report_id'])->all();
        $params['report'] = [
            "name" => $report->title,
            "link" => route('web.report.single', $report->slug)
        ];
        sendMail('enquiry@xcellentinsights.com', $subject, $params, 'order_confirmed');
    }

    public function placeOrder(Request $request, $id, $discount_link = '')
    {

        dd($discount_link);

        $order_prefix = [
            'Direct Bank Transfer' => 'DBT',
            'Paypal' => 'PP',
            'Stripe' => 'CC',
        ];
        $report = Report::find($id);
        dd($report);
        $plan_price = $report[$request->plan . '_price'];
        $discount_price = 0;

        if ($discount_link != '') {
            $discount_row = Discountlead::where('link', $discount_link)->where('report_id', $id)->first();
            if ($discount_row) {
                if ($discount_row->status == 'Active') {
                    if ($discount_row->type == 'percent') {
                        $discount_price = $plan_price * ($discount_row->discount_value / 100);
                    } else {
                        $discount_price =  $discount_row->discount_value;
                    }
                }
            }
        }

        $final_price = $plan_price - $discount_price;
        $data = $request->all();

        $data['order_id']     = $order_prefix[$request->payment_method] . '-' . $id . '-' . time();
        $data['plan_price']     = $plan_price;
        $data['discount_price'] = $discount_price;
        $data['final_price']    = $final_price;
        $data['payment_status'] = 'pending';
        $order_row = Order::create($data);
        Discountlead::where('link', $discount_link)->where('report_id', $id)->update([
            'status' => 'Expired'
        ]);

        if ($request->payment_method == 'Direct Bank Transfer') {
            return redirect()->route('web.orderConfirmed', $order_row->id);
        } elseif ($request->payment_method == 'Paypal') {
            return redirect()->route('web.payment.paypal', $order_row->id)->with('order_redirect', true);
        } elseif ($request->payment_method == 'Stripe') {
            return redirect()->route('web.payment.stripe', $order_row->id)->with('order_redirect', true);
        }
    }

    public function orderConfirmed($order_id)
    {
        $order = Order::find($order_id);
        $report = Report::find($order->report_id);
        return view('web.report.order_confirm', compact('order', 'report'));
    }

    public function orderCancelled($order_id)
    {
        $order = Order::find($order_id);
        $order->payment_status = 'Cancelled';
        $order->save();
        $report = Report::find($order->report_id);
        return view('web.report.order_cancelled', compact('order', 'report'));
    }
}
