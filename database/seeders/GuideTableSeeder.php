<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuideTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('guides')->insert([
            ['date_naissance'=>'2002-02-03' ,'cine'=>'ee564647'],
            ['date_naissance'=>'2002-02-04' ,'cine'=>'ee564657'],
            ['date_naissance'=>'2002-02-05' ,'cine'=>'ee564667'],
            ['date_naissance'=>'2002-02-06' ,'cine'=>'ee564677'],
            ['date_naissance'=>'2002-02-07' ,'cine'=>'ee564687'],
        ]);
    }
}
