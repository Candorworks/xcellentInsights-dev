<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable=['report_id','name','email','country','number','description','company','job_title','city','state','zip', 'payment_method', 'plan', 'plan_price', 'discount_price', 'final_price', 'payment_status', 'remark', 'order_id', 'address'];

    public function history(){
        return $this->hasOne(Paymenthistory::class);
    }

    public function report(){
        return $this->hasOne(Report::class, 'id', 'report_id');
    }
}