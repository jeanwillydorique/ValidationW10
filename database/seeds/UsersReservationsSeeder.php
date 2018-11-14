<?php

use Illuminate\Database\Seeder;

class UsersReservationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservations')->insert([
            [ 
            "name" => "Reserved",
            ],
            [ 
            "name" => "Not Reserved",
            ],
        ]);
    }
}
