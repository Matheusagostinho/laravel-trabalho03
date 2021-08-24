<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create(["name" => 'Carro']);
        Brand::create(["name" => 'Motocicleta']);
        Brand::create(["name" => 'Camionete']);
    }
}
