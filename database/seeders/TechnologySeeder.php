<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = ['C#', 'Java', 'Javascript', 'React', 'Php'];
        foreach ($technologies as $technology) {
            DB::table('technologies')->insert([
                'name' => $technology
            ]);
        }
    }
}
