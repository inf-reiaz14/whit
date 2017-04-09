
<?php

use Illuminate\Database\Seeder;

class seedSettings extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('settings')->insert([
            [
                'application_name'      => 'WebHawks IT',
                'application_slogan'    => 'We work together',
                'business_name'         => 'WebHawks IT', 
                'owners_name'           => 'WebHawks IT', 
                'address'               => 'House No: 286/288, Road No: 4, Flat No: C1, Mirpur Dohs', 
                'city'                  => 'Dhaka', 
                'country'               => 'Bangladesh', 
                'postcode'              => '1216', 
                'contact'               => '+880258070348', 
                'helpline'              => '+880258070348', 
                'helpmail'              => 'info@webhakwsit.com', 
                'email'                 => 'info@webhakwsit.com', 
                'logo_photo'            => '/public/img/settings/logo.png',
                'icon_photo'            => '/public/img/settings/favicon.png',
                'google_plus'           => 'http://plus.google.com',
                'facebook'              => 'http://facebook.com',
                'twitter'               => 'http://twitter.com',
                'is_controlled_access'  => '2',
            ],
        ]);
        
    }
}

        