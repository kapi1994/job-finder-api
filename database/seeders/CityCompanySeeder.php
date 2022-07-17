<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CityCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companyLocations = [
            ['city_id' => '1', 'company_id' => '1', 'address' => 'Adresa 1', 'address_number' => '1', 'telephone' => '111'],
            ['city_id' => '2', 'company_id' => '1', 'address' => 'Adresa 2', 'address_number' => '2', 'telephone' => '222'],
            ['city_id' => '3', 'company_id' => '2', 'address' => 'Adresa 1', 'address_number' => '1a', 'telephone' => '121'],
            ['city_id' => '4', 'company_id' => '4', 'address' => 'Adresa 2', 'address_number' => '2b', 'telephone' => '212'],
            ['city_id' => '5', 'company_id' => '3', 'address' => 'Adresa 1', 'address_number' => '1', 'telephone' => '333'],
            ['city_id' => '6', 'company_id' => '2', 'address' => 'Adresa 2', 'address_number' => '2', 'telephone' => '444'],
            ['city_id' => '7', 'company_id' => '3', 'address' => 'Adresa 1', 'address_number' => '1a', 'telephone' => '343'],
            ['city_id' => '8', 'company_id' => '4', 'address' => 'Adresa 2', 'address_number' => '2b', 'telephone' => '434']
        ];
        foreach ($companyLocations as $companyLocation) {
            DB::table('city_company')->insert([
                'city_id' => $companyLocation['city_id'],
                'company_id' => $companyLocation['company_id'],
                'address' => $companyLocation['address'],
                'address_number' => $companyLocation['address_number'],
                'phone' => $companyLocation['telephone']
            ]);
        }
    }
}
