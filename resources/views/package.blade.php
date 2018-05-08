@extends('layouts.app')

@section('content')

<div class="jumbotron p-3 p-md-5 text-dark rounded bg-light">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">{{$pack->name}}</h1>
          <p class="lead my-3"> {!!$pack->description!!}</p>
        
        </div>
       
</div>
<div class="container">
    
<div class="row m-2">

  <div class="col-md-6">
<div class="row imagerow"> 
<img class="restmain" id ="mainresimage" src="/../storage/package/{{$pack->name}}/{{$pack->image}}" onclick="displayImage()"/>
</div>
<br>
<div class="row" style="display:inline-block">

@foreach($tempfile as $file)


  <img class="lightbox" src="/../storage/package/{{$pack->name}}/{{$file}}" id="" onclick="displayImage()"/>


@endforeach



</div>

  </div>

  <div class="col-md-6">
   
    <div class="row">
        <div class="col-md-4">
            <b> Name </b>
         </div>
         <div class="col-md-4">
                 <span> {{$pack->name}}  </span>
         </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-4">
            <b> Phone </b>
         </div>
         <div class="col-md-4">
                 <span> {{$pack->phone}}  </span>
         </div>
           
    </div>
    <hr>
    <div class="row">
        <div class="col-md-4">
            <b> Email </b>
         </div>
         <div class="col-md-4">
                 <span> {{$pack->email}}  </span>
         </div>      
    </div>
    <hr>


    
  </div>


</div>

</div>
@endsection