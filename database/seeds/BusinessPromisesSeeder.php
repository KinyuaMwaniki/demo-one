<?php

use App\BusinessPromise;
use Illuminate\Database\Seeder;

class BusinessPromisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $free_delivery = BusinessPromise::create([
            'header' => 'Free Delivery',
            'description' => 'We deliver for free throughout the Nairobi cosmopolitan area',
        ]);
        $customer_care = BusinessPromise::create([
                    'header' => 'Superb Customer Care',
                    'description' => 'Our customer care reps will take care of your every concern as soon as it is raised',
                ]);
        $credit = BusinessPromise::create([
                    'header' => 'Credit Terms',
                    'description' => 'We offer competitive credit terms to our loyal customers',
                ]);
    }
}
