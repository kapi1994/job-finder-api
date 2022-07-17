<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\TypeOfJob;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            TechnologySeeder::class,
            SenioritySeeder::class,
            RoleSeeder::class,
            CountrySeeder::class,
            CitySeeder::class,
            CompanySeeder::class,
            CompanyTechnologySeeder::class,
            CityCompanySeeder::class,
            TypeOfJobSeeder::class,
        ]);
    }
}
