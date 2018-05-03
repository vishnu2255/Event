@extends('layouts.app')

@section('content')

<div class="jumbotron p-3 p-md-5 text-dark rounded bg-light">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">{{$costume->band}}</h1>
          <p class="lead my-3">{{$costume->description}}</p>
        
        </div>
</div>
<div class="container">
    
<div class="row m-2">

  <div class="col-md-6">
<div class="row imagerow"> 
<img class="restmain" id ="mainresimage" src="/storage/costume/{{$costume->band}}_{{$costume->section}}/{{$costume->image}}" onclick="displayImage()"/>
</div>
<br>
<div class="row" style="display:inline-block">

@foreach($tempfile as $file)

  <img class="lightbox" src="/storage/costume/{{$costume->band}}_{{$costume->section}}/{{$file}}" id="" onclick="displayImage()"/>

@endforeach



</div>

  </div>

  <div class="col-md-6">

</div>


@endsection