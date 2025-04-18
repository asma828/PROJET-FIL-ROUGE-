<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            //Wedding
            ['name' => 'Wedding Design'],
            ['name' => 'Venue Selection'],
            ['name' => 'Day Coordination'],
            ['name' => 'Vendor Management'],
            
            //Children Party
            ['name' => 'Party Themes'],
            ['name' => 'Games & Activities'],
            ['name' => 'Entertainment'],
            ['name' => 'Party Favors'],
            ['name' => 'Decorations'],
            
            //Graduation
            ['name' => 'Graduation Ceremony'],
            ['name' => 'Party Planning'],
            ['name' => 'Gift Ideas'],
            ['name' => 'Celebration Theme'],
            ['name' => 'Invitations'],
            
            //Engagement Party
            ['name' => 'Proposal Ideas'],
            ['name' => 'Engagement Decorations'],
            ['name' => 'Celebration Planning'],
            ['name' => 'Party Favors'],
            ['name' => 'Bridal Party'],
            
            //Corporate Events
            ['name' => 'Team Building'],
            ['name' => 'Conferences'],
            ['name' => 'Networking'],
            ['name' => 'Corporate Gifts'],
            ['name' => 'Employee Recognition'],
            
            //Festivals
            ['name' => 'Live Performances'],
            ['name' => 'Food Stalls'],
            ['name' => 'Art Installations'],
            ['name' => 'Festival Tickets'],
            ['name' => 'Activities & Workshops']
        ];

        Tag::insert($tags);
    }
}

    

