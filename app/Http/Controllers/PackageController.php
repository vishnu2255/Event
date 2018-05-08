<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;

class PackageController extends Controller
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
        //   $rests =AddFood::where('country',$val)->get();
      
          // print_r($bands);
          // return view('bandslist')->with('bands',$bands);
        //   return view('restaurantlist')->with('rests',$rests);
          $packs =Package::where('country',$val)->get();
          return view('packageslist')->with('packs',$packs);
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
            $filewithExt= $request->file('flyerimg')->getClientOriginalName();
            $fileName = pathinfo($filewithExt,PATHINFO_FILENAME);
            $fileExt = $request->file('flyerimg')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_flyer_'.time().'.'.$fileExt;
            //UPload Image
            $folderpath = 'public/package/'.$request->input('name') .'/';
            $path = $request->file('flyerimg')->storeAs($folderpath,$fileNameToStore);
        }
        else{
            $fileNameToStore = 'noimg.jpg';
            }


if($request->hasFile('uploaded_file'))
{
    $files = $request->file('uploaded_file');
    // var_dump($files);
   $fol =  'public/package/'.$request->input('name') .'/';


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
           $pack = new Package();
           $pack->country = $request->input('country');
           $pack->name = $request->input('name');
          
           $pack->phone=$request->input('phone');
           $pack->email=$request->input('email');
           $pack->description = $request->input('description');
           $pack->image= $fileNameToStore;

           $pack->save();

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

        // return $id;
        $pack= Package::where('id',$id)->first();
        // $rest = AddFood::where('id',$id)->first();
        $dir = $_SERVER['DOCUMENT_ROOT'] . 'storage/package/' . $pack->name ;
        // $dir = 'storage/restaurant/' . $rest->restName . '/';
        $files1 = scandir($dir);
        // $dir = 'storage/package/' . $pack->name . '/';
        // $files1 = scandir($dir);
       // print_r($files1);
        $tempfile = array();

        foreach($files1 as $fl)
        {
            if(strlen($fl)>3 && (strpos($fl,'flyer')==false))
            {
              $tempfile[] = $fl;

            }
        }

        return view('package',compact('pack','tempfile'));

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
