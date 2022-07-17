<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyTechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companyTechnologies = [
            ['company_id' => '1', 'technology_id' => '1'],
            ['company_id' => '1', 'technology_id' => '2'],
            ['company_id' => '1', 'technology_id' => '3'],
            ['company_id' => '2', 'technology_id' => '1'],
            ['company_id' => '2', 'technology_id' => '2'],
            ['company_id' => '3', 'technology_id' => '3'],
            ['company_id' => '3', 'technology_id' => '4'],
            ['company_id' => '4', 'technology_id' => '5'],
            ['company_id' => '4', 'technology_id' => '1']
        ];

        foreach ($companyTechnologies as $companyTechnology) {
            DB::table("company_technology")->insert([
                'company_id' => $companyTechnology['company_id'],
                'technology_id' => $companyTechnology['technology_id']
            ]);
        }
    }
}
