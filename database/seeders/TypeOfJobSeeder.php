<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeOfJobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typeOfJobs = ['Programming', 'QA', 'System Administration', 'UI/UX', "Intership"];
        foreach ($typeOfJobs as $typeOfJob) {
            DB::table('type_of_jobs')->insert([
                'name' => $typeOfJob
            ]);
        }
    }
}
