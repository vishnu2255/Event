@extends('layouts.app')

@section('content')

<div class="jumbotron p-3 p-md-5 text-dark rounded bg-light">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">desc</h1>
          <p class="lead my-3">Location.</p>
        
        </div>
</div>
<div class="container" style="margin-bottom: 10px">
      <div class="row mb-2">
        
        <div class="col-md-6">
        
            <div class="row imagerow">             
            <img style="width: 100%" src="/../storage/event/{{$event->coverimage}}" alt="Event" >
            </div>

            <br>
{{-- <div class="row" style="display:inline-block">

@foreach($tempfile as $file)
  <img class="lightbox" src="/storage/restaurant/{{$rest->restName}}/{{$file}}" id="" onclick="displayImage()"/>

@endforeach

</div> --}}

  </div>


        <div class="col-md-6">
          <div class="row">
              <button class="btn btn-default">Event Info</button>
              <button class="btn btn-default"> Venue Info</button>
          </div>
              <div class="row">
          <ul class="" style="list-style: none"> 
              <li class="m-3">
                    {{$event->eventname}}
              </li>
              
              <li class="m-3">
                  {{$event->eventclub}}
              </li>
              
              <li class="m-3">
                  {{$event->eventhours}}
              </li>

              
              <li class="m-3">
                  {{$event->eventwebsite}}
              </li>

          </ul>
        </div>
          <hr style="border-top: dotted 1px;" />  
          <div class="row mb-2">
          
            <div class="col-md-4"><b>Contact</b></div>

            <div class="col-md-4"><b>{{$event->eventphone}}</b></div>

          </div>
          <hr style="border-top: dotted 1px;" /> 
          <div class="row mb-2">
          
                <div class="col-md-4"><b>Email</b></div>
    
                <div class="col-md-4"><b>{{$event->eventmail}}</b></div>
    
          </div>

          <div class="row mb-2">
          
              <div class="col-md-4"><b>Dj Name</b></div>
  
              <div class="col-md-4"><b>{{$event->eventdjname}}</b></div>
  
        </div>

</div>
          </div>
        </div>


@endsection