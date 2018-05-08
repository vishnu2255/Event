<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $banners = Banner::where('group',1)->get();
        //var_dump($banners);
        return view('banners/group3')->with('banners',$banners);
        
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
    //    dd(request()->all());
                
if($request->hasFile('image'))
{
$filewithExt = $request->file('image')->getClientOriginalName();
//Get just filename
$filename = pathinfo($filewithExt,PATHINFO_FILENAME);
//Get file extension
$fileExt = $request->file('image')->getClientOriginalExtension();
$fileNameToStore = $filename.time().'.'.$fileExt;
//UPload Image
$folderpath = 'public/banners/'.$request->input('group') .'/';
$path = $request->file('image')->storeAs($folderpath,$fileNameToStore);


}
else{
    $fileNameToStore = 'noimg.jpg';
    }

    $ban = new Banner;
    $ban->name = $request->input('name');
    $ban->group = $request->input('group');
    $ban->image = $fileNameToStore;
    $ban->url = $request->input('url');
    $ban->counter = "1";
    $ban->save();
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
