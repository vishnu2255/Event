<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AddFood;


class Foodlist extends Controller
{
    //

    public function showallres()
    {
        // return 123;
        //
     $rests = AddFood::all();
    return view('restaurantlist')->with('rests',$rests);


    }
}
