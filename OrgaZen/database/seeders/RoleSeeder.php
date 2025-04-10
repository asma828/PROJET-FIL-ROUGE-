<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            ['id' =>1 , 'name' => 'admin'],
            ['id' =>2 , 'name' => 'client'],
            ['id' =>3 , 'name' => 'provider'],
        ]);
        
    }
}
