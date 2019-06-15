<?php

use Illuminate\Database\Seeder;
use App\Price;

class PricesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Price::class,6)->create();
    }
}
