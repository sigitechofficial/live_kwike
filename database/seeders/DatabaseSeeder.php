<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        $this->call(BannerSeeder::class);
        \App\Models\Product::factory(10)->create();
//        $this->call(UserSeeder::class);
//        $this->call(CategorySeeder::class);


    }
}
