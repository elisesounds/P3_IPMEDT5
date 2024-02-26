<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table("leds")->insert([
            "led_is_on" => false,
        ]);

        DB::table("counts")->insert([
            "times_pressed" => 0,
        ]);
    }
}
