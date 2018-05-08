@extends('layouts.app')

@section('content')

<form action="/postbanner" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
<div class="row form-group">
    <div class="col-md-4">
        <label  for="">Banner Name</label>
        <br>
        <input id="weekday" name="name" type="text" class= "form-control"> 
</div>

<div class="col-md-4">
        <label  for="">Banner Group</label>
        <br>
        <input id="weekend" name="group" type="text" class= "form-control"> 
</div>

<div class="col-md-4">
    <label  for="">Banner Url</label>
    <br>
    <input id="weekend" name="url" type="text" class= "form-control"> 
</div>

</div>
    
<div class="row form-group">
    <h2 class="form-control" >Add image</h2>
    <div class="row form-control" id="tempfiles">
            <div id="file-0">
                            <input type="file" class= "form-control" value="AddFile" name="image" multiple>                           
            </div>                  
     </div>           
</div>

<button class="btn btn-primary" type="submit">Submit</button>
</form>

@endsection