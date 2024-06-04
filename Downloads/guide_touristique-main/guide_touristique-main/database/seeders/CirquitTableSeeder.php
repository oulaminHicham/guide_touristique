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
            ['photos'=>'img-4.jpg' , 'descreption'=>'descreption 1' ,'prix'=>5665 ,'guide_id'=>1 ,'distination_id'=>1],
            ['photos'=>'img-5.jpg' , 'descreption'=>'descreption 1' ,'prix'=>5665 ,'guide_id'=>2 ,'distination_id'=>1],
            ['photos'=>'img-6.jpg' , 'descreption'=>'descreption 1' ,'prix'=>5665 ,'guide_id'=>3 ,'distination_id'=>2],
            ['photos'=>'img-7.jpg' , 'descreption'=>'descreption 1' ,'prix'=>5665 ,'guide_id'=>4 ,'distination_id'=>2],
            ['photos'=>'img-8.jpg' , 'descreption'=>'descreption 1' ,'prix'=>5665 ,'guide_id'=>1 ,'distination_id'=>3],
            ['photos'=>'img-9.jpg' , 'descreption'=>'descreption 1' ,'prix'=>5665 ,'guide_id'=>1 ,'distination_id'=>1],
        ]);
    }
}
