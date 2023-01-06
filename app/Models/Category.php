<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name','parent_id','active','vertical','thumbnail','information'];

    public function setNameAttribute($value){
        $this->attributes['name'] = ucfirst($value);
    }
    public function SubCategory(){
        return $this->hasMany(Category::class,'parent_id','id');
    }
    public function Blog(){
        return $this->hasMany(Blog::class,"category_id" , "id");
    }
}
