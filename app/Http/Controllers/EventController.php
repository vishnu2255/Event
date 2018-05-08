<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events;
class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uri= request()->path();
        $path = explode("/",$uri);

        $cntry = $path[0];

       // var_dump($cntry);

        switch ($cntry)
        {
            case "Toronto_Caribbean_Carnival":
            $val = "Toronto";
            break;           
            case "Crop_Over":
            $val ="Barbados";
            break;            

            case "Guyana_Carnival":
            $val ="Guyana";
            break;           

            case "Saint_Lucia_Carnival":
            $val="SaintLucia";
            break;

        }
        // $val = strtolower($val);  
        $events = Events::where('country',$val)->get();
        return view('eventslist')->with('events',$events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
$folderpath = 'public/event/'.$request->input('name') ;
$path = $request->file('flyerimg')->storeAs($folderpath,$fileNameToStore);

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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($country,$id)
    {
        $event = Events::where('id',$id)->first();
        //      return var_dump($event);
                return view('eventdetails')->with('event',$event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
