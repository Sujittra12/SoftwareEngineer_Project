<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusDateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        
        DB::table('status_date')->insert([
            ['Date_status_ID'=>'0',
            'Date_statusName'=>'วันหยุด', ],
            ['Date_status_ID'=>'1',
            'Date_statusName'=>'วันปกติ', ],
    ]);
    // foreach( $status_date as $key => $value ){

    //     \App\Models\status_date::create( $value);  //ส่งข้อมูลกลับไปที่ ตาราง
    // }
    }
}
