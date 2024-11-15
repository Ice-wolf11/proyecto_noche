<?php

namespace Database\Seeders;

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
        $this->call([
            AttendanceTypesSeeder::class,
            AttitudesSeeder::class,
            StudentsSeeder::class,
            TeachingUnitsSeeder::class,
            TeachingUnitsAssignmentsSeeder::class,
            AttendancesSeeder::class,
            StudentAttendancesSeeder::class,
        ]);
    }
}
