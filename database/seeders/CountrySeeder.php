<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = ['Serbia', "Germany", 'Usa', 'Uk', "Russia"];
        foreach ($countries as $country) {
            DB::table('countries')->insert([
                'name' => $country
            ]);
        }
    }
}
