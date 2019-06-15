<?php

use Illuminate\Database\Seeder;
use App\Addon;

class AddonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Addon::class,4)->create();
    }
}
