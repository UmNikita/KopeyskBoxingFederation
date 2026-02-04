<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach([false, true] as $visible) {
            DB::table('staff')->insert([
                "name" => Str::random(10),
                "secondname" => Str::random(10),
                "thirstname" => Str::random(10),
                "phone" => "8".fake()->numerify("##########"),
                "mail" => Str::random(10).'@example.com',
                "is_visible" => $visible,
                "positions_id" => '1'
            ]);
        }
        
    }
}
