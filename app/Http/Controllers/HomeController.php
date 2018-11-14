<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Arena as Arena;
use App\Reservation as Reservation;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arenas = Arena::all();
        $reservation = Reservation::all();
        return view('home', [
            "arenas"=> $arenas,
            "reservation"=> $reservation,
        ]) ;
    }
    public function orderbystatus()
    {
        $arenas = Arena::all();
        $arenassort = $arenas->sortBy('reservation');
        $reservation = DB::table('reservations')->get();
        return view('home', [
            "arenas"=> $arenassort,
            "reservation"=> $reservation,
        ]) ;
    }
    public function orderbylocalisation()
    {
        $arenas = Arena::all();
        $arenassort = $arenas->sortBy('localisation');
        $reservation = Reservation::all();
        return view('home', [
            "arenas"=> $arenassort,
            "reservation"=> $reservation,
        ]) ;
    }
}
