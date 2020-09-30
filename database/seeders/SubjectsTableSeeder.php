<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('subjects')->count() ===0){
              DB::table('subjects')->insert([
                  [
                      'name'=>'pt15111-laravel',
                      'gender'=>1,
                        'is_active'=>1,
                  ],
                  [
                    'name'=>'JS',
                    'gender'=>2,
                      'is_active'=>0,
                  ],
              ]);
        }
        else{
            echo 'Bang subject da co du lieu' .PHP_EOL;
        }
    }
}
