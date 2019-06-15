<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Service;
use App\Location;

class Price extends Model
{
    public function service(){
        return $this->belongsTo(Service::class);
    }

    public function location(){
        return $this->belongsTo(Location::class);
    }


}
