<?php
namespace App\Repositories\Contracts;

interface PriceRepositoryInterface{
    public function all();
    public function byLocation();
}