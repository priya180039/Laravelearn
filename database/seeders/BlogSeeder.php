<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $id = DB::table('users')->insertGetID([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password')
        ]);

        $data = [
            [
                'title' => 'Sleep',
                'content' => 'Of course you need to sleep enough to maintain a healthy lifestyle. By doing this, you can do anything you want without afraid of getting any health problem caused by fatigue.',
                'slug' => 'sleep',
                'image' => 'https://images.unsplash.com/photo-1541781774459-bb2af2f05b55?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1460&q=80',
                'author_id' => $id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Music',
                'content' => 'Listening to music will make you feel very relaxed, listen to your favorit music and listen to the deep lyrics would be very calming situation.',
                'slug' => 'music',
                'image' => 'https://images.unsplash.com/photo-1496293455970-f8581aae0e3b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1413&q=80',
                'author_id' => $id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Learn Something New',
                'content' => 'To increase your value, it\'s obvious to learn more skills. If you having more skills than anyone or in working recruitment we can call it other candidates, you\'ll have more chance to be top priority.',
                'slug' => 'learnmore',
                'image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80',
                'author_id' => $id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Games',
                'content' => 'You know, games is not all about wasting time. If you were burnt out, you can refresh your mind by playing games with your friend. Also you can add more friend to get more acquaintances.',
                'slug' => 'games',
                'image' => 'https://plus.unsplash.com/premium_photo-1678112179946-f13658b3e918?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80',
                'author_id' => $id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Cats',
                'content' => 'I love cats, it\'s so fluffy and cutes. You can hug your cat when you\'re in distress and Boomm! you\'ll feel relieved.',
                'slug' => 'cats',
                'image' => 'https://images.unsplash.com/photo-1568043210943-0e8aac4b9734?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80',
                'author_id' => $id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ];

        foreach($data as $item){
            DB::table('blogs')->insert($item);
        }
    }
}
