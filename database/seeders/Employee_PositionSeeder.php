<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Employee_PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employee_position')->insert([
            ['Position_ID'=>'P001',
            'Position_name'=>'หัวหน้าเเผนก', ],
            ['Position_ID'=>'P002',
            'Position_name'=>'พนักงานทั่วไป', ],
        ]);
       
    }
}
