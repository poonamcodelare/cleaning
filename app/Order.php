<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	
    protected $fillable = ['City_Id', 'Service_Id', 'Order_Title', 'Order_Types', 'Order_content', 'Payments', 'PickUp_At', 'Delivery_At',
	];

}
