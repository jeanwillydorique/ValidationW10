<?php

use Illuminate\Database\Seeder;

class UsersArenasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('arenas')->insert([
            [ 
            "name" => "TD Garden",
            "places" => "18 624",
            "img" => "http://media.delawarenorth.com//content/1108/images/2017/2/TDGarden_Exterior.jpg",
            "localisation" =>"Boston",
            "reservation_id" => "1",
            ],
            [ 
            "name" => "Oracle Arena",
            "places" => "19 596",
            "img" => "http://www.oraclearena.com/assets/img/Oracle-Arena-2.jpg",
            "localisation" =>"Oakland",
            "reservation_id" => "2",
            ],
            [ 
            "name" => "Smoothie King Center",
            "places" => "17 956",
            "img" => "",
            "localisation" =>"New Orleans",
            "reservation_id" => "1",
            ],
        ]);
    }
}
