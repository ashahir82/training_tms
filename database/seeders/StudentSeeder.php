<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('students')->insert([
            [
                'id' => 1,
                'name' => 'Ahmad Shahir',
                'ic' => '888888888888',
                'ndp' => '01123456',
                'tel_no' => '0123456789',
                'course_id' => 1,
                'gender' => 'male',
                'created_at' => '2021-10-20 11:50:50',
                'updated_at' => '2021-10-20 11:50:50'
            ],
            [
                'id' => 2,
                'name' => 'Azhari',
                'ic' => '788888888888',
                'ndp' => '11122456',
                'tel_no' => '0123456789',
                'course_id' => 1,
                'gender' => 'male',
                'created_at' => '2021-10-20 11:50:50',
                'updated_at' => '2021-10-20 11:50:50'
            ],
            [
                'id' => 3,
                'name' => 'Siti Bai',
                'ic' => '799999999999',
                'ndp' => '15211876',
                'tel_no' => '0123456789',
                'course_id' => 2,
                'gender' => 'female',
                'created_at' => '2021-10-20 11:50:50',
                'updated_at' => '2021-10-20 11:50:50'
            ],
        ]);
    }
}
