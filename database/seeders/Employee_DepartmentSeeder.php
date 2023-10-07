<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Employee_DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employee_department')->insert([
            ['department_ID'=>'D001',
            'department_name'=>'เเผนกบุคคล', ],
            ['department_ID'=>'D002',
            'department_name'=>'แผนกบัญชี/การเงิน', ],
            ['department_ID'=>'D003',
            'department_name'=>'เเผนกบุคคล', ],
            ['department_ID'=>'D004',
            'department_name'=>'เเผนกการตลาด', ],
            ['department_ID'=>'D005',
            'department_name'=>'แผนกโฆษา', ],
            ['department_ID'=>'D006',
            'department_name'=>'แผนกกฏหมาย', ],
        ]);
       
    }
}
