<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'houssam',
            'last_name' => 'bensltana',
            'email' => 'houssam@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => 1, 
        ]);
    }
}
