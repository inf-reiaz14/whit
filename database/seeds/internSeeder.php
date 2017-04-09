<?php

use Illuminate\Database\Seeder;

class internSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('interns')->insert([
            ['name'=> 'Hime', 'country_id'=> '20', 'image_photo'=> '/public/img/theme/media/team/2.jpg'],
            ['name'=> 'Hime', 'country_id'=> '20', 'image_photo'=> '/public/img/theme/media/team/2.jpg'],
            ['name'=> 'Hime', 'country_id'=> '20', 'image_photo'=> '/public/img/theme/media/team/2.jpg'],
            ['name'=> 'Hime', 'country_id'=> '20', 'image_photo'=> '/public/img/theme/media/team/2.jpg'],
            ['name'=> 'Hime', 'country_id'=> '20', 'image_photo'=> '/public/img/theme/media/team/2.jpg'],
            ['name'=> 'Hime', 'country_id'=> '20', 'image_photo'=> '/public/img/theme/media/team/2.jpg'],
        ]);
        
    }
}
