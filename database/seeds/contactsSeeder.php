<?php

use Illuminate\Database\Seeder;

class contactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('contacts')->insert([
            ['name'=> 'WebHawks IT, Bangladesh', 'icon'=> 'icon-bangladesh', 'address_line_1'=> '8F Grace Takanawa Building', 'address_line_2'=> '2-14-17 Takanawa minato-ku', 'address_line_3'=> 'Tokyo 108-0074, Japan', 'email'=> 'info@webhawksit.com', 'contact_no'=> '+123 456 789', 'background_photo'=> '/public/img/theme/media/ny.jpg', 'country_id'=> '18'],
            ['name'=> 'WebHawks IT, Japan',      'icon'=> 'icon-japan',      'address_line_1'=> '8F Grace Takanawa Building', 'address_line_2'=> '2-14-17 Takanawa minato-ku', 'address_line_3'=> 'Tokyo 108-0074, Japan', 'email'=> 'info@webhawksit.com', 'contact_no'=> '+123 456 789', 'background_photo'=> '/public/img/theme/media/ny.jpg', 'country_id'=> '114'],
            ['name'=> 'WebHawks IT, USA',        'icon'=> 'icon-USA',        'address_line_1'=> '8F Grace Takanawa Building', 'address_line_2'=> '2-14-17 Takanawa minato-ku', 'address_line_3'=> 'Tokyo 108-0074, Japan', 'email'=> 'info@webhawksit.com', 'contact_no'=> '+123 456 789', 'background_photo'=> '/public/img/theme/media/ny.jpg', 'country_id'=> '250'],
            ['name'=> 'WebHawks IT, Canada',     'icon'=> 'icon-canada',     'address_line_1'=> '8F Grace Takanawa Building', 'address_line_2'=> '2-14-17 Takanawa minato-ku', 'address_line_3'=> 'Tokyo 108-0074, Japan', 'email'=> 'info@webhawksit.com', 'contact_no'=> '+123 456 789', 'background_photo'=> '/public/img/theme/media/ny.jpg', 'country_id'=> '40'],
            ['name'=> 'WebHawks IT, Germany',    'icon'=> 'icon-germany',    'address_line_1'=> '8F Grace Takanawa Building', 'address_line_2'=> '2-14-17 Takanawa minato-ku', 'address_line_3'=> 'Tokyo 108-0074, Japan', 'email'=> 'info@webhawksit.com', 'contact_no'=> '+123 456 789', 'background_photo'=> '/public/img/theme/media/ny.jpg', 'country_id'=> '86'],
            ['name'=> 'WebHawks IT, Australia',  'icon'=> 'icon-australia',  'address_line_1'=> '8F Grace Takanawa Building', 'address_line_2'=> '2-14-17 Takanawa minato-ku', 'address_line_3'=> 'Tokyo 108-0074, Japan', 'email'=> 'info@webhawksit.com', 'contact_no'=> '+123 456 789', 'background_photo'=> '/public/img/theme/media/ny.jpg', 'country_id'=> '13'],
            ['name'=> 'WebHawks IT, Hongkong',   'icon'=> 'icon-hongkong',   'address_line_1'=> '8F Grace Takanawa Building', 'address_line_2'=> '2-14-17 Takanawa minato-ku', 'address_line_3'=> 'Tokyo 108-0074, Japan', 'email'=> 'info@webhawksit.com', 'contact_no'=> '+123 456 789', 'background_photo'=> '/public/img/theme/media/ny.jpg', 'country_id'=> '102'],
        ]);
        
    }
}
