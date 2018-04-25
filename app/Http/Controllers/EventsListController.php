<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events;

class EventsListController extends Controller
{
    public function showall()
    {
        $events = Events::all();

        return view('eventslist')->with('events',$events);


    }



    
}
