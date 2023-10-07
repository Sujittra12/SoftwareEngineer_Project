<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=[                                    //พนักงาน
     
         
      
        ];
        foreach($user as $key => $value ){

            \App\Models\User::create( $value);  //ส่งข้อมูลกลับไปที่ ตาราง
        }
        
    }
}
