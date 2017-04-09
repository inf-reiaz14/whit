<?php

use Illuminate\Database\Seeder;

class advisorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('advisors')->insert([
            ['name'=> 'Mr. Talha1', 'display_group'=> '1', 'designation'=> 'Advisor, USA', 'image_photo'=> '/public/img/theme/media/team/1.jpg'],
            ['name'=> 'Mr. Talha2', 'display_group'=> '1', 'designation'=> 'Advisor, USA', 'image_photo'=> '/public/img/theme/media/team/1.jpg'],
            ['name'=> 'Mr. Talha3', 'display_group'=> '1', 'designation'=> 'Advisor, USA', 'image_photo'=> '/public/img/theme/media/team/1.jpg'],
            ['name'=> 'Mr. Talha4', 'display_group'=> '1', 'designation'=> 'Advisor, USA', 'image_photo'=> '/public/img/theme/media/team/1.jpg'],
            ['name'=> 'Mr. Talha5', 'display_group'=> '2', 'designation'=> 'Advisor, USA', 'image_photo'=> '/public/img/theme/media/team/1.jpg'],
            ['name'=> 'Mr. Talha6', 'display_group'=> '3', 'designation'=> 'Advisor, USA', 'image_photo'=> '/public/img/theme/media/team/1.jpg'],
            ['name'=> 'Mr. Talha7', 'display_group'=> '4', 'designation'=> 'Advisor, USA', 'image_photo'=> '/public/img/theme/media/team/1.jpg'],
            ['name'=> 'Mr. Talha8', 'display_group'=> '4', 'designation'=> 'Advisor, USA', 'image_photo'=> '/public/img/theme/media/team/1.jpg'],
            ['name'=> 'Mr. Talha9', 'display_group'=> '4', 'designation'=> 'Advisor, USA', 'image_photo'=> '/public/img/theme/media/team/1.jpg'],
            ['name'=> 'Mr. Talha0', 'display_group'=> '4', 'designation'=> 'Advisor, USA', 'image_photo'=> '/public/img/theme/media/team/1.jpg'],
        ]);
        
    }
}
