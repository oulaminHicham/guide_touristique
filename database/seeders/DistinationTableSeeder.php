<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistinationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("distinations")->insert([
            ['nom'=>'ourika' , 'photo'=>'img-4.jpg'],
            ['nom'=>'tanger' , 'photo'=>'img-5.jpg'],
            ['nom'=>'rabat' , 'photo'=>'img-6.jpg'],
            ['nom'=>'ouzod' , 'photo'=>'img-7.jpg'],
            ['nom'=>'mrzougua' , 'photo'=>'img-1.jpeg'],
            ['nom'=>'chfchawn' , 'photo'=>'img-9.jpg'],
        ]);
    }
}
