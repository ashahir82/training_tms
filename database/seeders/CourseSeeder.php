<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('courses')->insert([
            [
                'id' => 1,
                'code' => 'F01',
                'name' => 'Teknologi Komputer (Sistem)',
                'description' => 'Belajar berkaitan sistem komputer dan rangkaian',
                'is_active' => 1,
                'created_at' => '2021-10-20 11:50:50',
                'updated_at' => '2021-10-20 11:50:50'
            ],
            [
                'id' => 2,
                'code' => 'A01',
                'name' => 'Teknologi Penyelenggaraan Mekanikal',
                'description' => 'Belajar berkaitan mesin dan alat gegas',
                'is_active' => 1,
                'created_at' => '2021-10-20 11:50:50',
                'updated_at' => '2021-10-20 11:50:50'
            ]
        ]);
    }
}
