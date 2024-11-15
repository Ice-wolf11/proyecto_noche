<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentAttendancesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student_attendances')->insert([
            [
                'attendance_id' => 1,
                'student_id' => 1,
                'attendance_type_id' => 1,
                'attitude_id' => 1,
                'comment' => 'Asistió y participó activamente en clase.',
            ],
            [
                'attendance_id' => 2,
                'student_id' => 2,
                'attendance_type_id' => 1,
                'attitude_id' => 2,
                'comment' => 'Asistió pero mostró mala actitud.',
            ],
            [
                'attendance_id' => 3,
                'student_id' => 3,
                'attendance_type_id' => 2,
                'attitude_id' => 3,
                'comment' => 'No asistió.',
            ],
            [
                'attendance_id' => 4,
                'student_id' => 4,
                'attendance_type_id' => 1,
                'attitude_id' => 1,
                'comment' => 'Asistió y participó activamente en clase.',
            ],
            [
                'attendance_id' => 5,
                'student_id' => 5,
                'attendance_type_id' => 2,
                'attitude_id' => 2,
                'comment' => 'No asistió y no justificó la falta.',
            ],
            [
                'attendance_id' => 6,
                'student_id' => 6,
                'attendance_type_id' => 1,
                'attitude_id' => 3,
                'comment' => 'Asistió pero estuvo distraído.',
            ],
            [
                'attendance_id' => 7,
                'student_id' => 7,
                'attendance_type_id' => 1,
                'attitude_id' => 1,
                'comment' => 'Asistió y mostró una excelente actitud.',
            ],
            [
                'attendance_id' => 8,
                'student_id' => 8,
                'attendance_type_id' => 1,
                'attitude_id' => 3,
                'comment' => 'Asistió pero no participó.',
            ],
            [
                'attendance_id' => 9,
                'student_id' => 9,
                'attendance_type_id' => 2,
                'attitude_id' => 2,
                'comment' => 'No asistió y justificó la falta.',
            ],
            [
                'attendance_id' => 10,
                'student_id' => 10,
                'attendance_type_id' => 1,
                'attitude_id' => 1,
                'comment' => 'Asistió y tuvo una excelente participación.',
            ],
        ]);
    }
}
