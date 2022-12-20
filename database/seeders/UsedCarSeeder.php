<?php

namespace Database\Seeders;

use App\Models\UsedCar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsedCarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UsedCar::create([
            'car_brand' => 'Toyota',
            'car_type' => 'Supra',
            'car_model' => 'Supra MK5',
            'price' => '2000000000'
        ]);

        UsedCar::create([
            'car_brand' => 'Honda',
            'car_type' => 'Civic',
            'car_model' => 'Civic Type R',
            'price' => '1000000000'
        ]);

        UsedCar::create([
            'car_brand' => 'Nissan',
            'car_type' => 'Skyline',
            'car_model' => 'Skyline R35',
            'price' => '4000000000'
        ]);

        UsedCar::create([
            'car_brand' => 'Chevrolet',
            'car_type' => 'Dodge',
            'car_model' => 'Dodge Challenger',
            'price' => '3000000000'
        ]);

        UsedCar::create([
            'car_brand' => 'BMW',
            'car_type' => 'M Series',
            'car_model' => 'M3 GTR',
            'price' => '1750000000'
        ]);
    }
}
