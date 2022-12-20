<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscountLead extends Model
{
    use HasFactory;
    protected $fillable=['email','status','discount_value','report_id','link', 'plan', 'type'];

    public function report(){
        return $this->hasOne(Report::class,'id','report_id');
    }
}
