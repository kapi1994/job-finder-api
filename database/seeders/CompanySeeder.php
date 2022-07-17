<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = [
            ['name' => 'Company 1', 'description' => 'This is company one', 'image_path' => 'Image 1', 'company_url' => 'site 1'],
            ['name' => 'Company 2', 'description' => 'This is company two', 'image_path' => 'Image 2', 'company_url' => 'site 2'],
            ['name' => 'Company 3', 'description' => 'This is company three', 'image_path' => 'Image 3', 'company_url' => 'site 3'],
            ['name' => 'Company 4', 'description' => 'This is company four', 'image_path' => 'Image 3', 'company_url' => 'site 4']
        ];

        foreach ($companies as $company) {
            DB::table("companies")->insert([
                'name' => $company['name'],
                'description' => $company['description'],
                'image_path' => $company['image_path'],
                'company_url' => $company['company_url']
            ]);
        }
    }
}
