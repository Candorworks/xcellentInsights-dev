<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

     protected $fillable=['unique_id','category_id','subcategory_id','title','thumbnail','format','single_price','multi_price','enterprise_price','pages','description','toc','table_figures','companies','publish', 'publisher_id', 'url_title', 'active','meta_desc','meta_title','keywords'];
    
    public function category(){
        return $this->hasOne(Category::class,'id','category_id');
    }

    public function subcategory(){
        return $this->hasOne(Category::class,'id','subcategory_id');
    }
    public function publisher(){
        return $this->hasOne(Publisher::class,'id','publisher_id');
    }
}
