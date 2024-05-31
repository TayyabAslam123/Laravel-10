<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::truncate();
        $entries =[
            ['title' => 'admin', 'details' => 'Details about admin role'],
            ['title' => 'user', 'details' => 'Details about user role'],
            ['title' => 'manager', 'details' => 'Details about manager role'],
            ['title' => 'editor', 'details' => 'Details about editor role'],
            ['title' => 'social-media', 'details' => 'Details about social-media role'],
            ['title' => 'hr', 'details' => 'Details about hr role'],
            ['title' => 'supplier', 'details' => 'Details about supplier role']
        ];
        ## Loop through
        foreach($entries as $entry){
            $x = new Post();
            $x->title = $entry['title'];
            $x->details = $entry['details'];
            $x->save();
        }
        ## Make log
        logger('post Seeder Compiled');

    }
}
