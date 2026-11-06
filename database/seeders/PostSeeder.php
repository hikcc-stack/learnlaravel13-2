<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 200; $i++) {
            DB::table('posts')->insert([
                // UUID - генерирует уникальный код, который не повторяется
                'title' => (string)Str::uuid(),
                // Генерация URL(slug) с приставкой post-
                'slug' => Str::slug('post-' . Str::random(6)),
                'text' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => rand(1, 10),
                'likes' => random_int(1, 10000),
            ]);
        }

        DB::table('posts')->insert([
            'title' => Str::random(10),
            'slug' => Str::random(10),
            'text' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
            'category_id' => rand(1, 10),
            'likes' => random_int(1, 10000),
        ]);
        DB::table('posts')->insert([
            'title' => Str::random(10),
            'slug' => Str::random(10),
            'text' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
            'category_id' => rand(1, 10),
            'likes' => random_int(1, 10000),
        ]);
        DB::table('posts')->insert([
            'title' => Str::random(10),
            'slug' => Str::random(10),
            'text' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
            'category_id' => rand(1, 10),
            'likes' => random_int(1, 10000),
        ]);
        DB::table('posts')->insert([
            'title' => Str::random(10),
            'slug' => Str::random(10),
            'text' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
            'category_id' => rand(1, 10),
            'likes' => random_int(1, 10000),
        ]);
    }
}
