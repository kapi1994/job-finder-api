<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            ['name' => 'Belgrade', 'country_id' => 1],
            ['name' => 'Novi Sad', 'country_id' => 1],
            ['name' => 'Berlin', 'country_id' => 2],
            ['name' => 'Hamburg', 'country_id' => 2],
            ['name' => 'Boston', 'country_id' => 3],
            ['name' => 'Chicago', 'country_id' => 3],
            ['name' => 'London', 'country_id' => 4],
            ['name' => 'Liverpool', 'country_id' => 4],
            ['name' => 'Moscow', 'country_id' => 5],
            ['name' => 'Sankt Petesburg', 'country_id' => 5],
        ];
        foreach ($cities as $city) {
            DB::table('cities')->insert([
                'name' => $city['name'],
                'country_id' => $city['country_id']
            ]);
        }
    }
}
