<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AddFood;

class AddFoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
     $rests = AddFood::all();
    return view('restaurantlist')->with('rests',$rests);


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
        dd(request()->all());
                
if($request->hasFile('flyerimg'))
{
$filewithExt = $request->file('flyerimg')->getClientOriginalName();
//Get just filename
$filename = pathinfo($filewithExt,PATHINFO_FILENAME);
//Get file extension
$fileExt = $request->file('flyerimg')->getClientOriginalExtension();
$fileNameToStore = $filename.'_flyer_'.time().'.'.$fileExt;
//UPload Image
$folderpath = 'public/restaurant/'.$request->input('name') .'/';
$path = $request->file('flyerimg')->storeAs($folderpath,$fileNameToStore);

}
else{
$fileNameToStore = 'noimg.jpg';
}

// $dir = 'storage/restaurant/';

// $files1 = scandir($dir);

// print_r($files1);


if($request->hasFile('uploaded_file'))
{
    $files = $request->file('uploaded_file');
    // var_dump($files);
   $fol =  'public/restaurant/'.$request->input('name') .'/';


foreach($files as $file)
{
// var_dump($file->getClientOriginalName());
$temfile = $file->getClientOriginalName();
$tempfilename = pathinfo($temfile,PATHINFO_FILENAME);
$tempfileext = $file->getClientOriginalExtension();
$tempfileNameToStore = $tempfilename . '_'.time().'.'.$tempfileext;

$path = $file->storeAs($fol,$tempfileNameToStore);
}
}
    //    dd($folderpath);
          $res = new AddFood;

        $res->restName = $request->input('name');
        $res->cuisine = $request->input('cuisine');
       
        $res->address = $request->input('address');
        $res->restphone=$request->input('phone');
        $res->restemail=$request->input('email');
        $res->restwebsite =$request->input('website');
        $res->zip =$request->input('zip');
        $res->city =$request->input('city');
        $res->weekday =$request->input('weekday');
        $res->weekend =$request->input('weekend');
        $res->restdescription =$request->input('description');

     
         $res->restimage = $fileNameToStore;

        $res->save();
return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $rest = AddFood::where('id',$id)->first();

        $dir = 'storage/restaurant/' . $rest->restName . '/';
        $files1 = scandir($dir);
       // print_r($files1);
        $tempfile = array();

        foreach($files1 as $fl)
        {
            if(strlen($fl)>3 && (strpos($fl,'flyer')==false))
            {
              $tempfile[] = $fl;

            }
        }

       // print_r($tempfile);
       return view('restaurant',compact('rest','tempfile'));
        //return view('restdetails')->with('rest',$rest);
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
