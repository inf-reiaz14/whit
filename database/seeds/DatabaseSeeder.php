<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(seedLanguages::class);
        $this->call(seedSettings::class);
        $this->call(seedSocials::class);
        $this->call(seedGatewayTable::class);
        $this->call(seedPages::class);
        $this->call(countrySeeder::class);
        $this->call(currencySeeder::class);
        $this->call(seedRoleTable::class);
        $this->call(seedNavsTable::class);
        $this->call(seedNavRoleTable::class);
        $this->call(seedPermissions::class);
        $this->call(seedPermissionRole::class);
        $this->call(seedUserTable::class);
        $this->call(skillsetsSeeder::class);
        $this->call(skillitemsSeeder::class);
        $this->call(skillChildsSeeder::class);
        $this->call(successStorySeeder::class);
        $this->call(jobCircularSeeder::class);
        $this->call(tmsSlideSeeder::class);
        $this->call(internSeeder::class);
        $this->call(applicationSeeder::class);
        $this->call(sectorSeeder::class);
        $this->call(testimonialSeeder::class);
        $this->call(advisorSeeder::class);
        $this->call(contactsSeeder::class);

        Model::reguard();
    }
}

    