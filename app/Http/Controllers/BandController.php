<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Band;

class BandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bands =Band::all();
        return view('bandslist')->with('bands',$bands);
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
        //
       // $band =new Band();

        if($request->hasFile('flyerimg'))
        {
            $filewithExt= $request->file('flyerimg')->getClientOriginalName();

            $fileName = pathinfo($filewithExt,PATHINFO_FILENAME);

            $fileExt = $request->file('flyerimg')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_flyer_'.time().'.'.$fileExt;
            //UPload Image
            $folderpath = 'public/band/'.$request->input('name') .'/';
            $path = $request->file('flyerimg')->storeAs($folderpath,$fileNameToStore);
        }
        else{
            $fileNameToStore = 'noimg.jpg';
            }


if($request->hasFile('uploaded_file'))
{
    $files = $request->file('uploaded_file');
    // var_dump($files);
   $fol =  'public/band/'.$request->input('name') .'/';


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
           $band = new Band();
           $band->name = $request->input('name');
           $band->type = $request->input('type');
           $band->address = $request->input('address');
           $band->phone=$request->input('phone');
           $band->email=$request->input('email');
           
           $band->zip =$request->input('zip');
           $band->city =$request->input('city');
           $band->description = $request->input('description');
           $band->image= $fileNameToStore;

           $band->save();

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

        $band= Band::where('id',$id)->first();

        $dir = 'storage/band/' . $band->name . '/';
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

        return view('band',compact('band','tempfile'));

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
