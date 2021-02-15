<?php

use App\ProductType;
use Illuminate\Database\Seeder;

class ProductTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $equipment = ProductType::create([
            'name' => 'Equipment',
        ]);
        $medicine = ProductType::create([
            'name' => 'Medicine',
        ]);
        $lab_suppies = ProductType::create([
            'name' => 'Lab Supplies',
        ]);
    }
}
