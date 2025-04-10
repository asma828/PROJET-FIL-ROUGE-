<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EventCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        
        $categories = [
            ['name' => 'Weddings', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Birthdays', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Corporate Events', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Festivals', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Children Party', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Graduation', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Anniversary', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Holiday Party', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Baby Shower', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Engagement Party', 'created_at' => $now, 'updated_at' => $now],
        ];

        DB::table('event_categories')->insert($categories);
    }
}