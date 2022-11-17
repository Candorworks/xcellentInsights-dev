<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    const TYPE_NEWS = 'News';
    const TYPE_BLOG = 'Blog';

    use HasFactory;
    public function Category(){
        return $this->hasOne(Category::class,'id','category_id');
    }
}
