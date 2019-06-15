<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Price;

class Location extends Model
{
    public function price(){
        return $this->belongsTo(Price::class);
    }
}
