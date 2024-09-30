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
            'name' => 'Ali Nabih',
            'email' => 'admin@gmail.com',
            'phone' => '01007575755',
            'password' => Hash::make('123456789'),
        ]);


        // With Query Builder
        DB::table('users')->insert([
            'name' => 'sara nour',
            'email' => 'user@gmail.com',
            'phone' => '0107575755',
            'password' => Hash::make('shezo123'),
        ]);
    }
}
