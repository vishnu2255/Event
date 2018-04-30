@extends('layouts.app')

@section('content')

<div class="jumbotron p-3 p-md-5 text-dark rounded bg-light">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">{{$rest->restName}}</h1>
          <p class="lead my-3">{{$rest->restdescription}}</p>
        
        </div>
</div>
<div class="container">
    
<div class="row m-2">

  <div class="col-md-6">
<div class="row imagerow"> 
<img class="restmain" id ="mainresimage" src="/storage/restaurant/{{$rest->restName}}/{{$rest->restimage}}" onclick="displayImage()"/>
</div>
<br>
<div class="row" style="display:inline-block">

@foreach($tempfile as $file)


  <img class="lightbox" src="/storage/restaurant/{{$rest->restName}}/{{$file}}" id="" onclick="displayImage()"/>
   
 {{-- <div class="lightbox-target" id="img">
       {{-- <img src="/storage/coverimages/party_1524175748.jpg" alt="">  --}}
       {{-- <img src="/storage/restaurant/{{$rest->restName}}/{{$file}}" onclick="displayImage()"/> --}}
    {{-- <img src="/storage/restaurant/{{$rest->restName}}/{{$file}}"/> --}}
    {{-- <a class="lightbox-close" href="#"></a> --}} 
 {{-- </div> --}}

@endforeach



</div>

  </div>

  <div class="col-md-6">
   
    <div class="row">
        <div class="col-md-4">
            <b> Cuisine </b>
         </div>
         <div class="col-md-4">
                 <span> {{$rest->cuisine}}  </span>
         </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-4">
            <b> Phone </b>
         </div>
         <div class="col-md-4">
                 <span> {{$rest->restphone}}  </span>
         </div>
           
    </div>
    <hr>
    <div class="row">
        <div class="col-md-4">
            <b> Email </b>
         </div>
         <div class="col-md-4">
                 <span> {{$rest->restemail}}  </span>
         </div>      
    </div>
    <hr>
    <div class="row">
<div class="col-md-4">
   <b> Website </b>
</div>
<div class="col-md-4">
        <span> <a href="http://"> {{$rest->restwebsite}} </a> </span>
</div>

    </div>
    <hr>
    <div class="row">

        <ul style="list-style-type: none">
            <li> <span>Monday : </span>  &nbsp; &nbsp; <span>  {{$rest->weekday}} </span> </li>
            <li> <span>Tuesday : </span>  &nbsp; &nbsp;<span> {{$rest->weekday}} </span> </li>
            <li> <span>Wednesday : </span>  &nbsp; &nbsp;<span> {{$rest->weekday}} </span> </li>
            <li> <span>Thursday : </span>  &nbsp; &nbsp;<span> {{$rest->weekday}} </span> </li>
            <li> <span>Friday : </span>  &nbsp; &nbsp;<span> {{$rest->weekday}} </span> </li>
            <li> <span>Saturday : </span>  &nbsp; &nbsp;<span> {{$rest->weekend}} </span> </li>
            <li> <span>Sunday : </span> &nbsp; &nbsp; <span> {{$rest->weekend}} </span> </li>
        </ul>
          
    </div>

    
  </div>


</div>

<div class="row" style="width: 800px;height: 600px">
    @include('group3');
</div>
</div>

{{-- <div class="container">
    @include('banners.group3');

</div> --}}

@endsection