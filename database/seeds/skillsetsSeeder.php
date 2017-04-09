<?php

use Illuminate\Database\Seeder;

class skillsetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('skillsets')->insert([
            ['id'=> '1', 'name'=> 'Coders Factory', 'icon'=>'icon-coderfactory', 'class_name'=> 'coders-factory', 'language_id'=>'1'],
            ['id'=> '2', 'name'=> 'Graphics Shop', 'icon'=>'icon-graphicshop', 'class_name'=> 'graphic-shop', 'language_id'=>'1'],
            ['id'=> '3', 'name'=> 'Digital Marketing', 'icon'=>'icon-digitalMarket', 'class_name'=> 'digital-market', 'language_id'=>'1'],
            ['id'=> '4', 'name'=> 'Operating System', 'icon'=>'icon-os', 'class_name'=> 'os', 'language_id'=>'1'],
            ['id'=> '5', 'name'=> 'Database', 'icon'=>'icon-database', 'class_name'=> 'database', 'language_id'=>'1'],
            ['id'=> '6', 'name'=> 'Back Office', 'icon'=>'icon-backoffice', 'class_name'=> 'back-office', 'language_id'=>'1'],
        ]);
        
    }
}
