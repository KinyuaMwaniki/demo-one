<?php

use App\CompanyDetail;
use Illuminate\Database\Seeder;

class CompanyDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company_detail = CompanyDetail::create([
            'company_name' => 'Medsales Unlimited',
            'email' => 'info@medsales.org',
            'mobile' => '0721212121',
            'address' => 'Westlands Road, House 411',
            'facebook' => 'www.facebook.com',
            'twitter' => 'www.twitter.com',
            'instagram' => 'www.instagram',
            'slogan' => 'Considered the best, by the best',
            'sub_slogan' => 'For all medicine supplies',
            'about_us_image' => 'default.jpg',
            'about_us_heading' => 'Voted best supplier of gloves, by ourselves',
            'about_us_description' => '
                                 <p>
                                    Since 2000, we have been at the forefront of the medical supplies industry in Kenya, and have time and again voted as one of the best
                                    and most reliable suppliers in the region.
                                </p>
                                <p>
                                    We are committed to making quality medical supplies available to all. We supply both brand and generic medicine and medical supplies, 
                                    to keep your hospital going.
                                </p>
                                <p>
                                    In Addition, we perform contracted services such as equipment maintenance, waste management, staff training and consulting on medical
                                    supplies procurement.
                                </p>
                                ',
            ]);
        }
    }
