<?php

namespace App\Http\Controllers;

use App\StoreAddress;

use Illuminate\Http\Request;

use App\Repositories\Contracts\PriceRepositoryInterface;
use App\Repositories\Contracts\LocationRepositoryInterface;

class FrontController extends Controller
{
    private $price;
    private $location;

    public function __construct(
        PriceRepositoryInterface $priceRepository,
        LocationRepositoryInterface $locationRepository)
        {
        
            $this->price = $priceRepository;
            $this->location = $locationRepository;
            
        }

    
    /**
     * Get All Prices According To the Location With Services
     *
     * @return object
     */
    
    public function getPricesByLocation(){
      return $this->price->byLocation();
    }

    public function getAddressesByLocation(){
        return $this->location->getAddresses();
    }
}
