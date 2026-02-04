<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news')->insert([
            "name" => Str::random(10),
            "date_publication" => fake()->dateTimeBetween("-1 year", "now"),
            "content" => Str::random(30),
        ]);
    }
}
