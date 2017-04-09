<?php

use Illuminate\Database\Seeder;

class sectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('sectors')->insert([
            ['name'=> 'Education',              'icon'=> 'icon-education', 'heading'=>'Heading', 'details'=> 'This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text.'],
            ['name'=> 'IT',                     'icon'=> 'icon-it', 'heading'=>'Heading', 'details'=> 'This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text.'],
            ['name'=> 'Entertainment',          'icon'=> 'icon-entertainment', 'heading'=>'Heading', 'details'=> 'This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text.'],
            ['name'=> 'Data Mining',            'icon'=> 'icon-data_mining', 'heading'=>'Heading', 'details'=> 'This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text.'],
            ['name'=> 'Finance',                'icon'=> 'icon-finance', 'heading'=>'Heading', 'details'=> 'This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text.'],
            ['name'=> 'Health Care',            'icon'=> 'icon-health', 'heading'=>'Heading', 'details'=> 'This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text.'],
            ['name'=> 'Sales and Marketing',    'icon'=> 'icon-sales-and-marketing', 'heading'=>'Heading', 'details'=> 'This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text.'],
            ['name'=> 'More',                   'icon'=> 'icon-hawkshead', 'heading'=>'Heading', 'details'=> 'This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text. This is a dummy long long text.'],
        ]);
        
    }
}
