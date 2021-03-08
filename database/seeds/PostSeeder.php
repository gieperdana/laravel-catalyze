<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=10; $i++){
            $dummy_post = [
                [
                    'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.',
                    'sub_title' => 'Marem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore. sed do eiusmod tempor incididunt ut labore. sed do eiusmod tempor incididunt ut labore.',
                    'paragraph1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. Excepteur sint occaecat cupidatat non proident',
                    'paragraph2' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. Excepteur sint occaecat cupidatat non proident',
                    'paragraph3' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. Excepteur sint occaecat cupidatat non proident',
                    'image' => 'https://source.unsplash.com/random',
                    'caption_image' => 'Donec non nunc vehicula Lorem ipsum dolor sit amet',
                    'quote' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut',
                    'published' => 0,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]
            ];
    
            DB::table('posts')->insert($dummy_post);
        }
    }
}
