<?php

use Illuminate\Database\Seeder;

class jobCircularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('jobcirculars')->insert([
            ['name'=> 'Programmer', 'country_id'=> '10', 'skills'=>'HTML, CSS3, JavaScript, Angular JS', 'category'=>'Front End', 'location'=>'WebHawks IT, NY', 'job_details_link'=> '', 'application_link'=> ''],
            ['name'=> 'Designer', 'country_id'=> '10', 'skills'=>'HTML, CSS3, JavaScript, Angular JS', 'category'=>'Front End', 'location'=>'WebHawks IT, NY', 'job_details_link'=> '', 'application_link'=> ''],
            ['name'=> 'Full-Stack Developer', 'country_id'=> '10', 'skills'=>'HTML, CSS3, JavaScript, Angular JS', 'category'=>'Front End', 'location'=>'WebHawks IT, NY', 'job_details_link'=> '', 'application_link'=> ''],
        ]);
        
    }
}
