<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SenioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $senioirites = ['Junior', 'Intermidate', 'Senior'];
        foreach ($senioirites as $seniority) {
            DB::table("seniorities")->insert([
                'name' => $seniority
            ]);
        }
    }
}
