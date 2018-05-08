<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events;

class EventsController extends Controller
{
    
    public function store(Request $request)
    {
        // dd(request()->all());
if($request->hasFile('flyerimg'))
{
$filewithExt = $request->file('flyerimg')->getClientOriginalName();
//Get just filename
$filename = pathinfo($filewithExt,PATHINFO_FILENAME);
//Get file extension
$fileExt = $request->file('flyerimg')->getClientOriginalExtension();
$fileNameToStore = $filename.'_'.time().'.'.$fileExt;
//UPload Image
$path = $request->file('flyerimg')->storeAs('public/coverimages',$fileNameToStore);

}
else{
$fileNameToStore = 'noimg.jpg';
}
    //    dd($request->all());


         $events = new Events;
        $events->country   = $request->input('country');
        $events->eventname = $request->input('name');
        $events->eventclub = $request->input('club');
        $events->eventdate =$request->input('date');
       
        $events->eventhours = $request->input('hours');
        $events->eventphone=$request->input('phone');
        $events->eventmail=$request->input('email');
        $events->eventwebsite =$request->input('website');
        $events->eventdescription =$request->input('description');
        $events->eventnotes =$request->input('notes');

        $events->eventdjname =$request->input('djname');
        
        $events->eventdjname =$request->input('carnivaldest');
        $events->coverimage = $fileNameToStore;

        $events->save();
return redirect('/');
      
    }

    public function show()
    {
        return view('eventdetails');
    }
}
