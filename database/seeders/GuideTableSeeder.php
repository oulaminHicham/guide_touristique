<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuideTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['date_naissance'=>'2002-02-03' ,'cine'=>'ee564647','name'=>'hicham' , 'prenom'=>'oulamine' ,'username'=>'oulamin_hicham' , 'photo'=>'guide1.jpg' , 'email'=>'hicham@gmail.com' , 'password'=>bcrypt('12345678') , 'isGuide'=>1 ] ,
            ['date_naissance'=>'2002-02-04' ,'cine'=>'ee564657','name'=>'yassir' , 'prenom'=>'badr' ,'username'=>'yassir_badr' , 'photo'=>'guide2.jpg' , 'email'=>'yassir@gmail.com' , 'password'=>bcrypt('12345678') , 'isGuide'=>1] ,
            ['date_naissance'=>'2002-02-05' ,'cine'=>'ee564667','name'=>'mohammed' , 'prenom'=>'imad' ,'username'=>'mohammed_imad' , 'photo'=>'guide3.jpg' , 'email'=>'mohammed@gmail.com' , 'password'=>bcrypt('12345678') , 'isGuide'=>1] ,
            ['date_naissance'=>'2002-02-06' ,'cine'=>'ee564677','name'=>'yassine' , 'prenom'=>'kamal' ,'username'=>'yassine_kamal' , 'photo'=>'guide4.jpg' , 'email'=>'yassine@gmail.com' , 'password'=>bcrypt('12345678')  , 'isGuide'=>1] ,
        ]);
    }
}
