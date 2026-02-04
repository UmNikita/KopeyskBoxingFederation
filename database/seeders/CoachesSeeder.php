<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Date;

class CoachesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('coaches')->insert([
            "name" => Str::random(10),
            "secondname" => Str::random(10),
            "thirstname" => Str::random(10),
            "description" => Str::random(20),
            "birthday" => fake()->dateTimeBetween("-1 year", "now"),
            "expirience" => fake()->numberBetween(1, 50)
        ]);
    }
}
