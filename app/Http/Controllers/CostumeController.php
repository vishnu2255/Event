<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Costume;

class CostumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $val = strtolower($val);
        // echo($val);
        $costumes = Costume::where('country',$val)->get();
        // print_r($costumes);
        return view("costumeslist")->with('costumes',$costumes);
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
        //  dd(request()->all());
    

if($request->hasFile('flyerimg'))
{
  


$filewithExt = $request->file('flyerimg')->getClientOriginalName();
//Get just filename
$filename = pathinfo($filewithExt,PATHINFO_FILENAME);
//Get file extension
$fileExt = $request->file('flyerimg')->getClientOriginalExtension();
$fileNameToStore = $filename.'_flyer_'.time().'.'.$fileExt;
//UPload Image
$folderpath = 'public/costume/'.$request->input('name') . '_'.$request->input('section') . '/';
$path = $request->file('flyerimg')->storeAs($folderpath,$fileNameToStore);

}
else{
$fileNameToStore = 'noimg.jpg';
}

if($request->hasFile('uploaded_file'))
{
    $files = $request->file('uploaded_file');
    // var_dump($files);
   $fol =  'public/costume/'.$request->input('name'). '_'.$request->input('section') .'/';


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
        $costume = new Costume;
        $costume->country = $request->input('country'); 
        $costume->band = $request->input('name');
        $costume->section = $request->input('section');
        $costume->description = $request->input('description');
     $cats = $request->input('category');

     $id=1;
     foreach($cats as $cat)
     {
         $temp='category'.$id;
$costume->$temp = $cat;
$id++;
     }
     $prices = $request->input('price');
     $id=1;
     foreach($prices as $price)
     {
         $tmppr= 'price'.$id;
$costume->$tmppr = $price;
$id++;
     }
    //  var_dump($cats);

        $costume->image = $fileNameToStore;

        $costume->save();
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
        //
// return  $id;
        $costume = Costume::where('id',$id)->first();
        
        // print_r($costume);

        // $dir = 'public/costume/'.$costume->band. '_'.$costume->section .'/';
       
        $dir = $_SERVER['DOCUMENT_ROOT'] . 'storage/costume/' . $costume->band . '_' . $costume->section;

        // $folder = 'public/costume/vb_ser/';
        $files1 = scandir($dir);

       // var_dump($files1);
       // print_r($files1);
        $tempfile = array();

        foreach($files1 as $fl)
        {
            if(strlen($fl)>3 && (strpos($fl,'flyer')==false))
            {
              $tempfile[] = $fl;

            }
        }

        return view("costume",compact('costume','tempfile'));
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
