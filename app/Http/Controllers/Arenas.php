<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Arena as Arena;
use App\Reservation as Reservation;

class Arenas extends Controller
{
    public function update(Request $request)
    {
        $arena = Arena::find($request->id);
        return view('updatearena', [
            "arena"=> $arena,
        ]) ;
    }

    public function updateOne(Request $request)
    {   
        $arena = Arena::find($request->id);
        if ( isset($request->reservation))
            {
                $reservation = 1;
            ;}
        else {
                $reservation = 2;
        } 
        if ( $request->img === "None")
            {
                $request->img = "https://www.templaza.com/blog/components/com_easyblog/themes/wireframe/images/placeholder-image.png";
            ;}

        $arena->name = $request->name;
        $arena->places = $request->place;
        $arena->localisation = $request->localisation;
        $arena->img = $request->img;
        $arena->reservation_id = $reservation;

        $arena->save();

        return redirect('/');  
    }

    public function deleteOne(Request $request)
    {
        Arena::destroy($request->id);
        return redirect('/');
    }

    public function createview()
    {
        return view('createarena');
    }

    public function createOne(Request $request)
    {
        if ( isset($request->reservation))
            {
                $reservation = 1;
            ;}
        else {
                $reservation = 2;
        } 
        if ( $request->img === "None")
            {
                $request->img = "https://www.templaza.com/blog/components/com_easyblog/themes/wireframe/images/placeholder-image.png";
            ;}


        $arena = new Arena;

        $arena->name = $request->name;
        $arena->places = $request->place;
        $arena->localisation = $request->localisation;
        $arena->img = $request->img;
        $arena->reservation_id = $reservation;

        $arena->save();
        return redirect('/');
    }
}
