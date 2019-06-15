<?php 
namespace App\Repositories\Eloquent;

use App\Location;
use App\StoreAddress;

use App\Repositories\Contracts\LocationRepositoryInterface;

class LocationRepository implements LocationRepositoryInterface{

    /**
     * Get all Store Addresses 
     *
     * @return Object
     */
    public function all() {
        return Location::all();
    }
    
    /**
     * Get all addresses of store with locations(states)
     *
     * @return void
     */
    public function getAddresses()  {
        return StoreAddress::with('location')->where('location_id',request('location_id'))->get();
    }
}