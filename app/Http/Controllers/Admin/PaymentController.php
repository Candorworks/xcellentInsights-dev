<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Paymenthistory;
use App\Models\DiscountLead;
use App\Models\Report;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Exception\PayPalConnectionException;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\ShippingInfo;
use PayPal\Api\Refund;
use PayPal\Api\RefundRequest;
use PayPal\Api\Sale;

use Redirect;
use Stripe\Checkout\Session;
use URL;
use Stripe\Stripe;

class PaymentController extends Controller
{
    //
    private $_api_context;

    public function __construct()
    {
        /** PayPal api context **/
        $paypal_conf = \Config::get('services.paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential(
            $paypal_conf['client_id'],
            $paypal_conf['secret']
        ));
        $this->_api_context->setConfig($paypal_conf['settings']);
    }

    public function paypalVerify(Request $request)
    {
        // dd($request->all());
        $success_link = $this->check($request);
        // dd($success_link);
        if ($success_link) {
            return redirect()->away($success_link);
        }

        return redirect()->route('web.error')->with('error',' Something went wrong test !!!');
    }

    public function check(Request $request)
    {
        $paymentId = $request->paymentId;
        $payment = Payment::get($paymentId, $this->_api_context);
        $execution = new PaymentExecution();
        $execution->setPayerId($request->PayerID);
        $transaction = new Transaction();
        $amount = new Amount();
        $amount->setCurrency('USD');
        $amount->setTotal($payment->transactions[0]->amount->total);
        $transaction->setAmount($amount);

        $execution->addTransaction($transaction);

        try {
            $result = $payment->execute($execution, $this->_api_context);

            // echo ("Executed Payment | Payment ".$payment->getId()." | ".$execution." | ".$result);

            try {
                $payment = Payment::get($paymentId, $this->_api_context);
            } catch (Exception $ex) {
                return false;
            }
        } catch (Exception $ex) {
            // return "Payment failed.Try again";
            return false;
        }
        // return $payment;

        $order = Order::find($payment->transactions[0]->item_list->items[0]->sku);
        $order->payment_status = 'success';
        $order->remark = json_encode([
            'paymentId' => $payment->id,
            // 'payer_id' => $request->PayerID,
            'payer_id' => $request->PayerID,
            'payer_email' => $payment->payer->payer_info->email,
            'payer_first_name' => $payment->payer->payer_info->first_name,
            'payer_last_name' => $payment->payer->payer_info->last_name,
        ]);
        $order->save();

        // Mail::to('asabhisheksingh554@gmail.com')->send(new NewOrder($paypal));
        // Mail::to('rupasinghrathaur01@gmail.com')->send(new NewOrder($paypal));

        // $product = unserialize($paypal->product_info);
        // $service = $product->category->name;
        // $limit = $product->limit;

        // create Payment history
        $history = new Paymenthistory();
        $history->order_id = $order->id;
        $history->payment_method = 'Paypal';
        $history->transaction_id = $payment->cart;
        $history->remark = json_encode([
            'paymentId' => $payment->id,
            'status' => $payment->state,
            // 'payer_id' => $request->PayerID,
            'payer_id' => $request->PayerID,
            'payer_info' => $payment->payer->payer_info,
            'transaction_details' => $payment->transactions,
        ]);
        $history->save();


        return route('web.orderConfirmed',$order->id);
    }

    
    public function payWithpaypal(Request $request, $order_id)
    {
        // dd(Session::get('order_redirect'));
        if(!\Session::has('order_redirect')){
            return redirect()->route('web.error')->with('error',' Something went wrong !!!');
        }

        $order=Order::find($order_id);
        $report=Report::find($order->report_id);
        // create payment transaction
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $item_1 = new Item();

        $item_1->setName($order->order_id) /** item name **/
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setPrice($order->final_price)
            ->setSku($order->id); /** unit price **/

        $item_list = new ItemList();
        $item_list->setItems(array($item_1));

        $amount = new Amount();
        $amount->setCurrency('USD')
            ->setTotal($order->final_price);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Your transaction description');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(route('web.payment.verify')) /** Specify return URL **/
            ->setCancelUrl(route('web.orderCancelled',$order_id));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
        /** dd($payment->create($this->_api_context));exit; **/
        try {

            $payment->create($this->_api_context);

        } catch (\PayPal\Exception\PPConnectionException $ex) {

            if (\Config::get('app.debug')) {

                \Session::put('error', 'Connection timeout');
                return redirect()->route('web.error');

            } else {

                \Session::put('error', 'Some error occur, sorry for inconvenient');
                return redirect()->route('web.error');

            }

        }
        // dd($payment);

        foreach ($payment->getLinks() as $link) {

            if ($link->getRel() == 'approval_url') {

                $redirect_url = $link->getHref();
                break;

            }

        }

        /** add payment ID to session **/
        \Session::put('paypal_payment_id', $payment->getId());

        if (isset($redirect_url)) {

            /** redirect to paypal **/
            return Redirect::away($redirect_url);

        }

        \Session::put('error', 'Unknown error occurred');
        return redirect()->route('web.error');


    }


    public function payWithstripe(Request $request, $order_id)
    {
        // dd(Session::get('order_redirect'));
        // if(!\Session::has('order_redirect')){
        //     return redirect()->route('web.error')->with('error',' Something went wrong !!!');
        // }

        $order=Order::find($order_id);
        $report=Report::find($order->report_id);

        // create payment transaction
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

        $paymentIntent = $stripe->paymentIntents->create([

            'amount' => $order->final_price,
    
            'currency' => 'usd',
    
            'automatic_payment_methods' => [
    
                'enabled' => true,
    
            ],
    
        ]);
        // dd($paymentIntent);
        return view('web.report.stripe',compact('order','report','paymentIntent'));
    }

    public function stripeinit(Request $request)
    {
        $arr = $request->all();
        // dd($arr);

        // $result = array_map(function($v){
        //     return [$v['name'] => $v['value']];
        // }, $arr);
        foreach($arr['data'] as $v){
            if($v['name']== '_token'){
                continue;
            }
            $result[$v['name']] = $v['value'];
        }
        // dd($result);

        // set order details
        $plan       = $arr['plan'];
        $report_id  = $arr['report_id'];
        $discount_link = $arr['discount_link'];
        $report=Report::find($report_id);
       
        $plan_price = $report[$plan.'_price'];
        $discount_price = 0;
        // if($discount_link != ''){
            // $discount_row = Discountlead::where('link', $discount_link)->where('report_id',$report_id)->first();
            $discount_row = Discountlead::where('report_id',$report_id)->first();
            if($discount_row){
                if($discount_row->status == 'Active'){
                    if($discount_row->type == 'percent'){
                        $discount_price = $plan_price * ($discount_row->discount_value / 100);
                    }else{
                        $discount_price =  $discount_row->discount_value;
                    }
                }
            }
        // }
        $final_price = $plan_price - $discount_price;
        $data=$result;

        $data['order_id']     = 'CC-'.$report_id.'-'.time();
        $data['plan_price']     = $plan_price;
        $data['discount_price'] = $discount_price;
        $data['final_price']    = $final_price;
        $data['payment_status'] = 'pending';
        $order_row = Order::create($data);
        Discountlead::where('link', $discount_link)->where('report_id',$report_id)->update([
            'status' => 'Expired'
        ]);

        // change currency
        $currency = 'USD';
        $payble_amt = $final_price * 100;
        if($order_row->country == 'India'){
            $currency = 'INR';
             $payble_amt = ($final_price * 100) * 75;
        }

        header('Content-Type: application/json');
        
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $checkout_session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [
                [
                //                STATIC ARRAY FOR DEMO
                    'price_data' => [
                        'currency' => $currency,
                        'unit_amount' => $payble_amt,
                        'product_data' => [
                            'name' => $report->title,
                            'images' => [@$report->thumbnail],
                        ],
                    ],
                    'quantity' => 1,
                ]
            ],
            'mode' => 'payment',
            'success_url' => route('web.stripe.verify',$order_row->id),
            'cancel_url' => route('web.orderCancelled',$order_row->id)
        ]);

        //returns session id
        $order_row->remark = $checkout_session->id;
        $order_row->save();
        return response()->json(['id' => $checkout_session->id]);
    }

    public function stripeVerify(Request $request, $order_id)
    {
        $order = Order::find($order_id);
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $session = Session::retrieve($order->remark);
        $customer = \Stripe\Customer::retrieve($session->customer);
        // dd($customer);
        if($session->payment_status == 'paid'){
            $order->payment_status = 'success';
            $order->remark = json_encode([
                'paymentId' => $session->payment_intent,
                // 'payer_id' => $request->PayerID,
                'payer_id' => $customer->id,
                'payer_email' => $customer->email,
                'payer_first_name' => $customer->name,
                'payer_last_name' => '',
            ]);
            $order->save();
            // Mail::to('asabhisheksingh554@gmail.com')->send(new NewOrder($paypal));
            // Mail::to('rupasinghrathaur01@gmail.com')->send(new NewOrder($paypal));

            // $product = unserialize($paypal->product_info);
            // $service = $product->category->name;
            // $limit = $product->limit;

            // create Payment history
            $history = new Paymenthistory();
            $history->order_id = $order->id;
            $history->payment_method = 'Stripe';
            $history->transaction_id = $session->payment_intent;
            $history->remark = json_encode([
                'paymentId' => $session,
                'payer_id' => $customer,
              
            ]);
            $history->save();
    
    
            return redirect()->route('web.orderConfirmed',$order->id);
        }
        

        return redirect()->route('web.orderCancelled',$order_row->id);
       
        // dd($session);
    }
}
