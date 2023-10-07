<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status_time')->insert([
              ['StatusTime_ID'=>'0',
            'StatusTime_Name'=>'ขาดงาน', ],
            ['StatusTime_ID'=>'1',
            'StatusTime_Name'=>'ปกติ', ],
            ['StatusTime_ID'=>'2',
            'StatusTime_Name'=>'เข้างานสาย', ],
            ['StatusTime_ID'=>'3',
            'StatusTime_Name'=>'ลาป่วย', ],
            ['StatusTime_ID'=>'4',
            'StatusTime_Name'=>'ลากิจ', ],
            ['StatusTime_ID'=>'5',
            'StatusTime_Name'=>'กลับก่อนเวลา', ],
            ['StatusTime_ID'=>'6',
            'StatusTime_Name'=>'ลาครึ่งวัน', ],
        ]);
       
    }
}
