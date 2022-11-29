<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $fillable=['lead_type','name','email','website','number','description','company','job_title','reports_no','new_publications','ip', 'country','report_id'];
    
    function leadtype(){
        return $this->hasOne(Leadtype::class,'id','lead_type');
    }

    function report(){
        return $this->hasOne(Report::class,'id','report_id');
    }
}
