<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Employee_StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('employee_status')->insert([
            ['status_ID'=>'0',
            'status_name'=>'ลาออก' ],
            ['status_ID'=>'1',
            'status_name'=>'ยังทำงาน' ],
            ['status_ID'=>'2',
            'status_name'=>'พักงาน' ],
        ]);
    
    }
}
