@extends('layouts.app')

@section('content')

<div class="jumbotron p-3 p-md-5 text-dark rounded bg-light">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">{{$band->name}}</h1>
          <p class="lead my-3"> {!!$band->description!!} </p>
          
        </div>
</div> 
<div class="container">
    
<div class="row m-2">

  <div class="col-md-6">
<div class="row imagerow"> 
<img class="restmain" id ="mainresimage" src="/storage/band/{{$band->name}}/{{$band->image}}" onclick="displayImage()"/>
</div>
<br>
<div class="row" style="display:inline-block">

@foreach($tempfile as $file)


  <img class="lightbox" src="/storage/band/{{$band->name}}/{{$file}}" id="" onclick="displayImage()"/>


@endforeach



</div>

  </div>

  <div class="col-md-6">
   
    <div class="row">
        <div class="col-md-4">
            <b> Type </b>
         </div>
         <div class="col-md-4">
                 <span> {{$band->type}}  </span>
         </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-4">
            <b> Phone </b>
         </div>
         <div class="col-md-4">
                 <span> {{$band->phone}}  </span>
         </div>
           
    </div>
    <hr>
    <div class="row">
        <div class="col-md-4">
            <b> Email </b>
         </div>
         <div class="col-md-4">
                 <span> {{$band->email}}  </span>
         </div>      
    </div>
    <hr>
    <div class="row">
<div class="col-md-4">
   <b> Address </b>
</div>
<div class="col-md-4">
        <span>  {{$band->address}}  </span>
</div>

    </div>
    <hr>


    
  </div>


</div>
</div>


@endsection