<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Price;

class Service extends Model
{
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function prices(){
        return $this->hasMany(Price::class);
    }
}
