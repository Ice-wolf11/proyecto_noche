<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeachingUnitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teaching_units')->insert([
            [
                'name' => 'Matemáticas Básicas',
                'code' => 'MAT101',
                'credits' => '3',
                'semester_id' => 1,
            ],
            [
                'name' => 'Física General',
                'code' => 'FIS101',
                'credits' => '3',
                'semester_id' => 1,
            ],
            [
                'name' => 'Química General',
                'code' => 'QUI101',
                'credits' => '3',
                'semester_id' => 1,
            ],
            [
                'name' => 'Programación I',
                'code' => 'PRO101',
                'credits' => '4',
                'semester_id' => 1,
            ],
            [
                'name' => 'Algebra Lineal',
                'code' => 'ALG101',
                'credits' => '3',
                'semester_id' => 2,
            ],
            [
                'name' => 'Cálculo Diferencial',
                'code' => 'CAL101',
                'credits' => '4',
                'semester_id' => 2,
            ],
            [
                'name' => 'Estadística I',
                'code' => 'EST101',
                'credits' => '3',
                'semester_id' => 2,
            ],
            [
                'name' => 'Física II',
                'code' => 'FIS102',
                'credits' => '3',
                'semester_id' => 2,
            ],
            [
                'name' => 'Química Orgánica',
                'code' => 'QUI102',
                'credits' => '3',
                'semester_id' => 2,
            ],
            [
                'name' => 'Programación II',
                'code' => 'PRO102',
                'credits' => '4',
                'semester_id' => 2,
            ],
        ]);
    }
}
