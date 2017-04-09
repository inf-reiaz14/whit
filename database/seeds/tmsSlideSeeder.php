<?php

use Illuminate\Database\Seeder;

class tmsSlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('tmsslides')->insert([
            ['name'=> 'Healthy profit margin', 'details'=> 'Healthy profit margin'],
            ['name'=> 'Healthy profit margin', 'details'=> 'Healthy profit margin'],
            ['name'=> 'Healthy profit margin', 'details'=> 'Healthy profit margin'],
        ]);
        
    }
}
