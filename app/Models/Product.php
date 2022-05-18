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

    public function search($name =null){
        $result = $this->where(function($query) use($name){
            if($name){
              $query->where('name', 'LIKE', "%($name)%");
            }
        })->paginate(4);

        return $result;
     }
}



