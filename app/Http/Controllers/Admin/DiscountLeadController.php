<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\DiscountLead;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class DiscountLeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $list = DiscountLead::orderBy('id','desc')->get();
        return view('admin.discount.list',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('admin.discount.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $discount = DiscountLead::create($request->all());
        $discount->link = md5(time().$request->email);
        $discount->save();

        return redirect()->route('admin.discount.list')->withSuccess('Discount added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DiscountLead  $discountLead
     * @return \Illuminate\Http\Response
     */
    public function show(DiscountLead $discountLead)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DiscountLead  $discountLead
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $discountLead = DiscountLead::find($id);
        // dd($discountLead->id);
        return view('admin.discount.edit', compact( 'discountLead'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DiscountLead  $discountLead
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $discountLead = DiscountLead::find($id);
        $discountLead->report_id = $request->report_id;
        $discountLead->email = $request->email;
        // $discountLead->plan = @$request->plan;
        $discountLead->link = md5(time().$request->email);
        $discountLead->status = $request->status;
        $discountLead->discount_value = $request->discount_value;
        $discountLead->save();
        return redirect()->route('admin.discount.list')->withSuccess('Discount updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DiscountLead  $discountLead
     * @return \Illuminate\Http\Response
     */
    public function destroy(DiscountLead $discountLead)
    {
        //
    }
}
