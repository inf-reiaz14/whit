<?php

use Illuminate\Database\Seeder;

class applicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('applications')->insert([
            ['name'=> 'Hawks Hiararchy', 'logo_photo'=> '/public/img/applications/1.png'],
            ['name'=> 'Hawks Bill', 'logo_photo'=> '/public/img/applications/2.png'],
            ['name'=> 'Hawks Finance', 'logo_photo'=> '/public/img/applications/4.png'],
            ['name'=> 'Hawks Ticket', 'logo_photo'=> '/public/img/applications/6.png'],
            ['name'=> 'Hawks Notifier', 'logo_photo'=> '/public/img/applications/7.png'],
            ['name'=> 'Hawks Portfolio', 'logo_photo'=> '/public/img/applications/9.png'],
            ['name'=> 'Hawks Scooby', 'logo_photo'=> '/public/img/applications/10.png'],
            ['name'=> 'Hawks Conversion', 'logo_photo'=> '/public/img/applications/11.png'],
            ['name'=> 'Hawks HR', 'logo_photo'=> '/public/img/applications/12.png'],
            ['name'=> 'Hawks Ticket', 'logo_photo'=> '/public/img/applications/13.png'],
            ['name'=> 'Hawks School ERP', 'logo_photo'=> '/public/img/applications/14.png'],
            ['name'=> 'Hawks Notifier', 'logo_photo'=> '/public/img/applications/15.png'],
            ['name'=> 'Hawks Portfolio', 'logo_photo'=> '/public/img/applications/16.png'],
            ['name'=> 'Hawks Scooby', 'logo_photo'=> '/public/img/applications/17.png'],
            ['name'=> 'Hawks Conversion', 'logo_photo'=> '/public/img/applications/18.png'],
            ['name'=> 'Hawks TMS Flow', 'logo_photo'=> '/public/img/applications/19.png'],
            ['name'=> 'Hawks TeamSourcing', 'logo_photo'=> '/public/img/applications/20.png'],
            ['name'=> 'Hawks Connect', 'logo_photo'=> '/public/img/applications/21.png'],
            ['name'=> 'Hawks EDU CMS', 'logo_photo'=> '/public/img/applications/22.png'],
            ['name'=> 'Hawks CONNECT', 'logo_photo'=> '/public/img/applications/23.png'],
            ['name'=> 'Hawks EDU CMS', 'logo_photo'=> '/public/img/applications/24.png'],
            ['name'=> 'Hawks ', 'logo_photo'=> '/public/img/applications/25.png'],
            ['name'=> 'Hawks Mailing', 'logo_photo'=> '/public/img/applications/26.png'],
        ]);
        
    }
}
