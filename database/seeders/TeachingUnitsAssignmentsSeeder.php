<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeachingUnitsAssignmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teaching_units_assignments')->insert([
            [
                'teacher_id' => 10,
                'teaching_unit_id' => 1,
                'period_id' => 10,
                'shift_id' => 10,
            ],
            [
                'teacher_id' => 10,
                'teaching_unit_id' => 2,
                'period_id' => 10,
                'shift_id' => 10,
            ],
            [
                'teacher_id' => 10,
                'teaching_unit_id' => 3,
                'period_id' => 10,
                'shift_id' => 10,
            ],
            [
                'teacher_id' => 10,
                'teaching_unit_id' => 4,
                'period_id' => 10,
                'shift_id' => 10,
            ],
            [
                'teacher_id' => 10,
                'teaching_unit_id' => 5,
                'period_id' => 10,
                'shift_id' => 10,
            ],
            [
                'teacher_id' => 10,
                'teaching_unit_id' => 6,
                'period_id' => 10,
                'shift_id' => 10,
            ],
            [
                'teacher_id' => 10,
                'teaching_unit_id' => 7,
                'period_id' => 10,
                'shift_id' => 10,
            ],
            [
                'teacher_id' => 10,
                'teaching_unit_id' => 8,
                'period_id' => 10,
                'shift_id' => 10,
            ],
            [
                'teacher_id' => 10,
                'teaching_unit_id' => 9,
                'period_id' => 10,
                'shift_id' => 10,
            ],
            [
                'teacher_id' => 10,
                'teaching_unit_id' => 10,
                'period_id' => 10,
                'shift_id' => 10,
            ],
        ]);
    }
}
