<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User();
        $user->name = 'ashahir';
        $user->email = 'ashahir@gmail.com';
        $user->password = Hash::make('pass1234');
        $user->save();

        $user = new User();
        $user->name = 'abubakar';
        $user->email = 'abubakar@gmail.com';
        $user->password = Hash::make('pass1234');
        $user->save();
    }
}
