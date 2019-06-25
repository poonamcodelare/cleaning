<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	
    protected $fillable = ['User_Id', 'Service_Id', 'Order_Title', 'Order_Types', 'Order_content', 'Payments', 'pickdate', 'dropdate',
	];

}
