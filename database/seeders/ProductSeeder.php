<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 20; $i++) {
            DB::table('products')->insert([
                'name' => Str::random(10),
                'description' => Str::random(50),
                'price' => rand(1, 10000),
            ]);
        }
        // Генерация рандомных данных с последующим вводом внутрь таблицы products
        DB::table('products')->insert([
            'name' => Str::random(10),
            'description' => Str::random(50),
            'price' => rand(1, 10000),
        ]);
        DB::table('products')->insert([
            'name' => Str::random(10),
            'description' => Str::random(50),
            'price' => rand(1, 10000),
        ]);
        DB::table('products')->insert([
            'name' => Str::random(10),
            'description' => Str::random(50),
            'price' => rand(1, 10000),
        ]);
        DB::table('products')->insert([
            'name' => Str::random(10),
            'description' => Str::random(50),
            'price' => rand(1, 10000),
        ]);
        // Вставка конкретных данных
        DB::table('products')->insert([
            'name' => 'Колбаса',
            'description' => 'Колбаса высшего сорта',
            'price' => 100.32,
        ]);
    }
}
