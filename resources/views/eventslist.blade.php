@extends('layouts.app')

@section('content')
<div class="mt-3" style="margin-left: 10px;">

@foreach($events as $event)

<div class="gallery" style="width: 400px;height: 300px;background-color:aliceblue">
    <a  href="eventslist/{{$event->id}}">
      <img src="/../storage/event/{{$event->coverimage}}" alt="Event" style="width: 100%;height: 80%">
    </a>

    <div style="font-family: Arial, Helvetica, sans-serif; overflow: hidden;text-overflow: ellipsis; white-space: nowrap;" class="desc">{{$event->eventname}}</div>
  </div>

@endforeach
</div>
@endsection
{{--   
<div class="gallery">
  <a target="_blank" href="fjords.jpg">
    <img src="../images/party.jpg" alt="Fjords" width="300" height="100">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="forest.jpg">
    <img src="../images/party.jpg" alt="Forest" width="300" height="100">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="lights.jpg">
    <img src="../images/party.jpg" alt="Northern Lights" width="300" height="100">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="mountains.jpg">
    <img src="../images/party.jpg" alt="Mountains" width="300" height="100">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>


<div class="gallery">
        <a target="_blank" href="mountains.jpg">
          <img src="../images/party.jpg" alt="Mountains" width="300" height="100">
        </a>
        <div class="desc">Add a description of the image here</div>
      </div>

      <div class="gallery">
            <a target="_blank" href="mountains.jpg">
              <img src="../images/party.jpg" alt="Mountains" width="300" height="100">
            </a>
            <div class="desc">Add a description of the image here</div>
          </div>
        </div> --}}
