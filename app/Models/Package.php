<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $table ='packages';
    protected $guarded = [];


    public function get_categoryName()
    {
        return $this->belongsTo(Category::class,'category_package_id','id');
    }
}
