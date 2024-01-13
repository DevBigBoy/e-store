<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // With Model
        User::create([
            'name' => 'Mohamed Ali',
            'email' => 'user@gmail.com',
            'phone_number' => '01007512122',
            'password' => Hash::make('shezo123'),
        ]);


        // With Query Builder
        DB::table('users')->insert([
            'name' => 'Mohamed Ali',
            'email' => 'user2@gmail.com',
            'phone_number' => '0107575755',
            'password' => Hash::make('shezo123'),
        ]);
    }
}
