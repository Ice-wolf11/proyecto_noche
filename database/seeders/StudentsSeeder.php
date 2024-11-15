<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            [
                'first_name' => 'Juan',
                'last_name' => 'Perez',
                'dni' => '12345678',
                'email' => 'juan.perez@example.com',
                'phone' => '987654321',
                'enrollment_code' => 'E001',
                'gender' => 'M',
                'district' => 'Lima',
                'photo' => 'photos/juan.png',
                'user_id' => 1,
            ],
            [
                'first_name' => 'Maria',
                'last_name' => 'Lopez',
                'dni' => '87654321',
                'email' => 'maria.lopez@example.com',
                'phone' => '987654322',
                'enrollment_code' => 'E002',
                'gender' => 'F',
                'district' => 'Cusco',
                'photo' => 'photos/maria.png',
                'user_id' => 2,
            ],
            [
                'first_name' => 'Carlos',
                'last_name' => 'Gomez',
                'dni' => '11223344',
                'email' => 'carlos.gomez@example.com',
                'phone' => '987654323',
                'enrollment_code' => 'E003',
                'gender' => 'M',
                'district' => 'Arequipa',
                'photo' => 'photos/carlos.png',
                'user_id' => 3,
            ],
            [
                'first_name' => 'Ana',
                'last_name' => 'Martinez',
                'dni' => '44332211',
                'email' => 'ana.martinez@example.com',
                'phone' => '987654324',
                'enrollment_code' => 'E004',
                'gender' => 'F',
                'district' => 'Trujillo',
                'photo' => 'photos/ana.png',
                'user_id' => 4,
            ],
            [
                'first_name' => 'Luis',
                'last_name' => 'Fernandez',
                'dni' => '55667788',
                'email' => 'luis.fernandez@example.com',
                'phone' => '987654325',
                'enrollment_code' => 'E005',
                'gender' => 'M',
                'district' => 'Chiclayo',
                'photo' => 'photos/luis.png',
                'user_id' => 5,
            ],
            [
                'first_name' => 'Sofia',
                'last_name' => 'Ramirez',
                'dni' => '88776655',
                'email' => 'sofia.ramirez@example.com',
                'phone' => '987654326',
                'enrollment_code' => 'E006',
                'gender' => 'F',
                'district' => 'Piura',
                'photo' => 'photos/sofia.png',
                'user_id' => 6,
            ],
            [
                'first_name' => 'Jose',
                'last_name' => 'Torres',
                'dni' => '99887766',
                'email' => 'jose.torres@example.com',
                'phone' => '987654327',
                'enrollment_code' => 'E007',
                'gender' => 'M',
                'district' => 'Iquitos',
                'photo' => 'photos/jose.png',
                'user_id' => 7,
            ],
            [
                'first_name' => 'Laura',
                'last_name' => 'Rojas',
                'dni' => '66778899',
                'email' => 'laura.rojas@example.com',
                'phone' => '987654328',
                'enrollment_code' => 'E008',
                'gender' => 'F',
                'district' => 'Tacna',
                'photo' => 'photos/laura.png',
                'user_id' => 8,
            ],
            [
                'first_name' => 'Miguel',
                'last_name' => 'Paredes',
                'dni' => '22334455',
                'email' => 'miguel.paredes@example.com',
                'phone' => '987654329',
                'enrollment_code' => 'E009',
                'gender' => 'M',
                'district' => 'Huancayo',
                'photo' => 'photos/miguel.png',
                'user_id' => 9,
            ],
            [
                'first_name' => 'Elena',
                'last_name' => 'Castro',
                'dni' => '55443322',
                'email' => 'elena.castro@example.com',
                'phone' => '987654330',
                'enrollment_code' => 'E010',
                'gender' => 'F',
                'district' => 'Juliaca',
                'photo' => 'photos/elena.png',
                'user_id' => 10,
            ],
        ]);
    }
}
