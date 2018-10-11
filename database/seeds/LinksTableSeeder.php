<?php

use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //I will call the Links factory and create 5 link objects
        //This must be called from the main seeder DatabaseSeeder
        factory(App\Link::class, 5)->create();
    }
}
