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
            ['id' =>1 , 'name' => 'Weddings', 'created_at' => $now, 'updated_at' => $now,'image' =>'https://i.pinimg.com/736x/bd/b2/b3/bdb2b3175179ba0534979f0608f8997c.jpg','description' => 'A wedding is a joyful celebration of love and commitment'],
            ['id' =>2 , 'name' => 'Birthdays', 'created_at' => $now, 'updated_at' => $now, 'image' => 'https://i.pinimg.com/736x/5f/f9/5f/5ff95f9578bc078c28aebf63c54ad895.jpg','description' => 'A birthday is a special celebration marking another year of life, filled with joy.'],
            ['id' =>3 , 'name' => 'Corporate Events', 'created_at' => $now, 'updated_at' => $now, 'image' =>'https://i.pinimg.com/736x/83/df/1d/83df1d516c0fba80261c19350c2e5a5a.jpg', 'description' =>'A corporate event is a professional gathering designed to foster networking, collaboration.'],
            ['id' =>4 , 'name' => 'Festivals', 'created_at' => $now, 'updated_at' => $now , 'image' => 'https://i.pinimg.com/736x/c6/d1/2a/c6d12a833347ec33c362d227c635c921.jpg','description' => 'A festival is a vibrant celebration of culture, tradition, and community.'],
            ['id' =>5 , 'name' => 'Children Party', 'created_at' => $now, 'updated_at' => $now, 'image' =>'https://i.pinimg.com/736x/92/99/df/9299df4c0c8610e0ea34a0c95ed4b08c.jpg', 'description' =>'A childrens party is a fun-filled celebration with games, decorations, and treats.'],
            ['id' =>6 , 'name' => 'Graduation', 'created_at' => $now, 'updated_at' => $now, 'image' =>'https://i.pinimg.com/736x/40/9a/25/409a256286f3a07bc96ab49656568830.jpg','description' =>'Graduation is a special ceremony that marks the completion of a student’s academic journey, celebrating their hard work.'],
            ['id' =>7 , 'name' => 'Holiday Party', 'created_at' => $now, 'updated_at' => $now,'image' => 'https://i.pinimg.com/736x/42/a7/15/42a715ac11f2dfe31344e87d9842f7dc.jpg','description' =>'Holiday Party is a festive gathering held during the holiday season to celebrate joy,and the spirit of the occasion with friends, family, or colleagues.'],
            ['id' =>8 , 'name' => 'Engagement Party', 'created_at' => $now, 'updated_at' => $now,'image' =>'https://i.pinimg.com/736x/4d/99/42/4d9942d8017c5597e720586acb783ad2.jpg','description' =>'Engagement Party is a joyful celebration where a couple announces and celebrates their decision to get married.'],
        ];

        DB::table('event_categories')->insert($categories);
    }
}