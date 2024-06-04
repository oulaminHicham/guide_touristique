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
            ['photos'=>'ag2.jpg' , 'descreption'=>'good descreption 1' ,'prix'=>5665 ,'guide_id'=>1 ,'distination_id'=>1],
            ['photos'=>'ag3.jpg' , 'descreption'=>'good descreption 2' ,'prix'=>5665 ,'guide_id'=>2 ,'distination_id'=>1],
            ['photos'=>'ag4.jpg' , 'descreption'=>'good descreption 3' ,'prix'=>5665 ,'guide_id'=>3 ,'distination_id'=>2],
            ['photos'=>'ag5.jpg' , 'descreption'=>'good descreption 4' ,'prix'=>5665 ,'guide_id'=>4 ,'distination_id'=>2],
            ['photos'=>'ag6.jpg' , 'descreption'=>'good descreption 5' ,'prix'=>5665 ,'guide_id'=>1 ,'distination_id'=>3],
            ['photos'=>'ag7.jpg' , 'descreption'=>'good descreption 6' ,'prix'=>5665 ,'guide_id'=>1 ,'distination_id'=>1],
        ]);
    }
}
