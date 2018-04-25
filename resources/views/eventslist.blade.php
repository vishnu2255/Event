@extends('layouts.app')

@section('content')
<div class="container mt-3">

@foreach($events as $event)

<div class="gallery">
    <a  href="/eventslist/{{$event->id}}">
      <img src="storage/coverimages/{{$event->coverimage}}" alt="Event" width="300" height="100">
    </a>

    <div style="font-family: Arial, Helvetica, sans-serif" class="desc">{{$event->eventdescription}}</div>
  </div>

@endforeach

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
