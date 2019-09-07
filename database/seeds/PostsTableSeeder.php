<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => Str::random(10),
            'body' => Str::random(10),
            'user_id' => mt_rand(1,2),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d")
        ]);
    }
}
