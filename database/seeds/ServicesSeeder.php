<?php

use App\Service;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $networking = Service::create([
            'header' => 'Business card design',
            'description' => 'We will design and print business cards for your staff.',
        ]);
        $server_maintenance = Service::create([
                    'header' => 'Bulk Printing',
                    'description' => 'We privide bulk printing both in black and color',
                ]);
        $pbx_installation = Service::create([
                    'header' => 'Business Branding',
                    'description' => 'We guide you through branding your business for better exposure',
                ]);
        $supplies = Service::create([
                    'header' => 'Web design',
                    'description' => 'We build websites that match your business needs',
                ]);
    }
}
