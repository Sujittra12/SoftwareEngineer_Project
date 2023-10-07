<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Date_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('date')->insert([
         ['all_date'=>'2023-01-01',
        'Date_status_ID'=>'0', ],
        ['all_date'=>'2023-01-02',
        'Date_status_ID'=>'0', ],
        ['all_date'=>'2023-01-03',
        'Date_status_ID'=>'1', ],
        ['all_date'=>'2023-01-04',
        'Date_status_ID'=>'1', ],
        ['all_date'=>'2023-01-05',
        'Date_status_ID'=>'1', ],
    ]);
    }
}
