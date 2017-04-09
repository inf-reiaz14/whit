<?php

use Illuminate\Database\Seeder;

class skillitemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skillitems')->insert([
            ['id'=> '1',  'name'=>'JavaScript',         'skillset_id'=> '1', 'language_id'=>'1'],
            ['id'=> '2',  'name'=>'Ruby',               'skillset_id'=> '1', 'language_id'=>'1'],
            ['id'=> '3',  'name'=>'Java',               'skillset_id'=> '1', 'language_id'=>'1'],
            ['id'=> '4',  'name'=>'PHP',                'skillset_id'=> '1', 'language_id'=>'1'],
            ['id'=> '5',  'name'=>'Python',             'skillset_id'=> '1', 'language_id'=>'1'],
            ['id'=> '6',  'name'=>'C',                  'skillset_id'=> '1', 'language_id'=>'1'],
            ['id'=> '7',  'name'=>'C++',                'skillset_id'=> '1', 'language_id'=>'1'],
            ['id'=> '8',  'name'=>'CSS',                'skillset_id'=> '1', 'language_id'=>'1'],
            ['id'=> '9',  'name'=>'Shell',              'skillset_id'=> '1', 'language_id'=>'1'],
            ['id'=> '10', 'name'=>'C#',                 'skillset_id'=> '1', 'language_id'=>'1'],
            ['id'=> '11', 'name'=>'Objective-C',        'skillset_id'=> '1', 'language_id'=>'1'],
            ['id'=> '12', 'name'=>'Perl',               'skillset_id'=> '1', 'language_id'=>'1'],
            ['id'=> '13', 'name'=>'CoffeeScript',       'skillset_id'=> '1', 'language_id'=>'1'],
            ['id'=> '14', 'name'=>'Go',                 'skillset_id'=> '1', 'language_id'=>'1'],
            ['id'=> '15', 'name'=>'Scala',              'skillset_id'=> '1', 'language_id'=>'1'],
            ['id'=> '16', 'name'=>'VimL',               'skillset_id'=> '1', 'language_id'=>'1'],
            ['id'=> '17', 'name'=>'R',                  'skillset_id'=> '1', 'language_id'=>'1'],
            ['id'=> '18', 'name'=>'Haskell',            'skillset_id'=> '1', 'language_id'=>'1'],
            ['id'=> '19', 'name'=>'Clojure',            'skillset_id'=> '1', 'language_id'=>'1'],
            ['id'=> '20', 'name'=>'Groovy',             'skillset_id'=> '1', 'language_id'=>'1'],
            ['id'=> '21', 'name'=>'Swift',              'skillset_id'=> '1', 'language_id'=>'1'],
            ['id'=> '22', 'name'=>'ActionScript',       'skillset_id'=> '1', 'language_id'=>'1'],
            ['id'=> '23', 'name'=>'Arduino',            'skillset_id'=> '1', 'language_id'=>'1'],
            ['id'=> '24', 'name'=>'Visual Basic',       'skillset_id'=> '1', 'language_id'=>'1'],
            ['id'=> '25', 'name'=>'HTML',               'skillset_id'=> '1', 'language_id'=>'1'],
            ['id'=> '26', 'name'=>'Assembly',           'skillset_id'=> '1', 'language_id'=>'1'],
            ['id'=> '27', 'name'=>'Dart',               'skillset_id'=> '1', 'language_id'=>'1'],
            ['id'=> '28', 'name'=>'Prolog',             'skillset_id'=> '1', 'language_id'=>'1'],
            ['id'=> '29', 'name'=>'XSLT',               'skillset_id'=> '1', 'language_id'=>'1'],
            ['id'=> '30', 'name'=>'Scheme',             'skillset_id'=> '1', 'language_id'=>'1'],
            ['id'=> '31', 'name'=>'ASP',                'skillset_id'=> '1', 'language_id'=>'1'],
            ['id'=> '32', 'name'=>'Processing',         'skillset_id'=> '1', 'language_id'=>'1'],
            ['id'=> '33', 'name'=>'Elixir',             'skillset_id'=> '1', 'language_id'=>'1'],
            ['id'=> '34', 'name'=>'ColdFusion',         'skillset_id'=> '1', 'language_id'=>'1'],
            ['id'=> '35', 'name'=>'Racket',             'skillset_id'=> '1', 'language_id'=>'1'],
            ['id'=> '36', 'name'=>'Pascal',             'skillset_id'=> '1', 'language_id'=>'1'],
            ['id'=> '37', 'name'=>'Delphi',             'skillset_id'=> '1', 'language_id'=>'1'],
            ['id'=> '38', 'name'=>'XML',                'skillset_id'=> '1', 'language_id'=>'1'],
            ['id'=> '39', 'name'=>'SQL',                'skillset_id'=> '1', 'language_id'=>'1'],
            ['id'=> '40', 'name'=>'Objective-C++',      'skillset_id'=> '2', 'language_id'=>'1'],
            ['id'=> '41', 'name'=>'3D + Animation',     'skillset_id'=> '2', 'language_id'=>'1'],
            ['id'=> '42', 'name'=>'2D and 3D',          'skillset_id'=> '2', 'language_id'=>'1'],
            ['id'=> '43', 'name'=>'Design',             'skillset_id'=> '2', 'language_id'=>'1'],
            ['id'=> '44', 'name'=>'CAD',                'skillset_id'=> '2', 'language_id'=>'1'],
            ['id'=> '45', 'name'=>'Games',              'skillset_id'=> '2', 'language_id'=>'1'],
            ['id'=> '46', 'name'=>'Creative Insights',  'skillset_id'=> '2', 'language_id'=>'1'],
            ['id'=> '47', 'name'=>'Documentaries',      'skillset_id'=> '2', 'language_id'=>'1'],
            ['id'=> '48', 'name'=>'Web',                'skillset_id'=> '2', 'language_id'=>'1'],
        ]);
    }
}
