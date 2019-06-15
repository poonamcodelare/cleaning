<?php


use Illuminate\Database\Seeder;
use App\StoreAddress;

class StoreLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(StoreAddress::class,12)->create();
        
    }
}
