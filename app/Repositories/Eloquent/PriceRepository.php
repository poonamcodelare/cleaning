<?php 
namespace App\Repositories\Eloquent;

use App\Price;
use App\Repositories\Contracts\PriceRepositoryInterface;

class PriceRepository implements PriceRepositoryInterface{

    /**
     * All prices to be returned 
     *
     * @return Object
     */
   
     public function all(){
        return Price::all();
    }


    /**
     * All prices by location with services
     *
     * @return Object
     */
   
     public function byLocation()
    {       
        return Price::with('service')->with('location')->where('location_id' , request('location_id'))->get();
    }
    
}