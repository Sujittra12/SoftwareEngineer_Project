<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('checkIn_Out')->insert([
            'WorkIN'=>'08:30:00',
            'WorkOut'=>'16:30:00'
        ]);
    }
}
