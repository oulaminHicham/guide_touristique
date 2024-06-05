<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResservationTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reservations')->insert(
        [
            ['date'=>'2022-02-02' ,'distination'=>'Marrekech' , 'user_id'=>1 , 'cirquit_id'=>1] ,
            ['date'=>'2022-03-02' ,'distination'=>'tanja' , 'user_id'=>1 , 'cirquit_id'=>1] ,
            ['date'=>'2022-04-02' ,'distination'=>'agadir' , 'user_id'=>2 , 'cirquit_id'=>2] ,
            ['date'=>'2022-05-02' ,'distination'=>'ourika' , 'user_id'=>2 , 'cirquit_id'=>2] 
        ]);
    }
}
