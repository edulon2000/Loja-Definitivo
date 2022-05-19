<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function category(){
        return $this->belongsTo(Category::class);
    }


    public function scopeSearch($query, $name =null){
        if (!is_null($name)) {
            return $query->where('name', 'like' , '%' . $name . '%');
        }

        return $query;
     }
}



