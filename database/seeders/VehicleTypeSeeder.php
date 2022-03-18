<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicle_types')->insert([
            'title' => 'Car',
            'image' => 'car.png',
        ]);
        DB::table('vehicle_types')->insert([
            'title' => 'Van',
            'image' => 'van.png',
        ]);
    }
}
