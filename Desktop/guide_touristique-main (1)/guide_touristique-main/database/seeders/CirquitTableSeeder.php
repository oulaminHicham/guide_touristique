<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CirquitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cirquits')->insert([
            ['photos'=>'ag2.jpg' , 'nom'=>'good descreption 1'  ,'guide_id'=>1 ,'distination_id'=>1],
            ['photos'=>'ag3.jpg' , 'nom'=>'good descreption 2' ,'guide_id'=>2 ,'distination_id'=>1],
            ['photos'=>'ag4.jpg' , 'nom'=>'good descreption 3' ,'guide_id'=>3 ,'distination_id'=>2],
            ['photos'=>'ag5.jpg' , 'nom'=>'good descreption 4' ,'guide_id'=>4 ,'distination_id'=>2],
            ['photos'=>'ag6.jpg' , 'nom'=>'good descreption 5' ,'guide_id'=>1 ,'distination_id'=>3],
            ['photos'=>'ag7.jpg' , 'nom'=>'good descreption 6' ,'guide_id'=>1 ,'distination_id'=>1],
        ]);
    }
}
