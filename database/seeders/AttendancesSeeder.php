<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttendancesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attendances')->insert([
            [
                'fecha' => '2024-01-01',
                'teaching_units_assignment_id' => 1,
            ],
            [
                'fecha' => '2024-01-02',
                'teaching_units_assignment_id' => 2,
            ],
            [
                'fecha' => '2024-01-03',
                'teaching_units_assignment_id' => 3,
            ],
            [
                'fecha' => '2024-01-04',
                'teaching_units_assignment_id' => 4,
            ],
            [
                'fecha' => '2024-01-05',
                'teaching_units_assignment_id' => 5,
            ],
            [
                'fecha' => '2024-01-06',
                'teaching_units_assignment_id' => 6,
            ],
            [
                'fecha' => '2024-01-07',
                'teaching_units_assignment_id' => 7,
            ],
            [
                'fecha' => '2024-01-08',
                'teaching_units_assignment_id' => 8,
            ],
            [
                'fecha' => '2024-01-09',
                'teaching_units_assignment_id' => 9,
            ],
            [
                'fecha' => '2024-01-10',
                'teaching_units_assignment_id' => 10,
            ],
        ]);
    }
}
