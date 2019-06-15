<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Service;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class,3)->create()->each(function($category){
            $category->services()->saveMany(factory(Service::class,2)->make());
        });
    }
}
