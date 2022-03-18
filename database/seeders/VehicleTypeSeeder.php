<?php

namespace Database\Seeders;

use App\Models\VehicleType;
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
        VehicleType::create([
            'title' => 'Car',
            'image' => 'car.png',
        ]);
        VehicleType::create([
            'title' => 'Van',
            'image' => 'van.png',
            
        ]);
    }
}
