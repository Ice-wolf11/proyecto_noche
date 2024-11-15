<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttitudesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attitudes')->insert([
            ['name' => 'bueno'],
            ['name' => 'malo'],
            ['name' => 'regular'],
        ]);
    }
}
