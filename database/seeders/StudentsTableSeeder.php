<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//use DB để có thể sử dụng các phương thức
use Illuminate\Support\Facades\DB;
class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('students')->count() ===0){
             DB::table('students')->insert([
          [
            'name'=> 'Nguyen Van A',
            'phone'=>'02039128903',
            'age'=>20,
            'gender'=>1,
            'address'=>'HN',
            'is_active'=>true,
        ],
        [
            'name'=> 'Nguyen Van B',
            'phone'=>'02039128723',
            'age'=>22,
            'gender'=>0,
            'address'=>'HN',
            'is_active'=>true,
        ]
             ]);
        }
        else{
            echo 'Bang students da co du lieu' . PHP_EOL;
        }
    }
}
