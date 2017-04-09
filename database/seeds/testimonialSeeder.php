<?php

use Illuminate\Database\Seeder;

class testimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('testimonials')->insert([
            ['name'=> 'John Doe', 'designation'=> 'founder of twitter', 'image_photo'=> '/public/img/settings/testimonee.png', 'details'=> 'This is a long long testimonial string. This could be bigger or smaller.	This is a long long testimonial string. This could be bigger or smaller.	This is a long long testimonial string. This could be bigger or smaller.	This is a long long testimonial string. This could be bigger or smaller.'],
            ['name'=> 'John Doe', 'designation'=> 'founder of twitter', 'image_photo'=> '/public/img/settings/testimonee.png', 'details'=> 'This is a long long testimonial string. This could be bigger or smaller.	This is a long long testimonial string. This could be bigger or smaller.	This is a long long testimonial string. This could be bigger or smaller.	This is a long long testimonial string. This could be bigger or smaller.'],
            ['name'=> 'John Doe', 'designation'=> 'founder of twitter', 'image_photo'=> '/public/img/settings/testimonee.png', 'details'=> 'This is a long long testimonial string. This could be bigger or smaller.	This is a long long testimonial string. This could be bigger or smaller.	This is a long long testimonial string. This could be bigger or smaller.	This is a long long testimonial string. This could be bigger or smaller.'],
        ]);
        
    }
}
