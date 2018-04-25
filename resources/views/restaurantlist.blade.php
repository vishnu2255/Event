@extends('layouts.app')

@section('content')
<div class="container mt-3">

@foreach($rests as $rest)

<div class="gallery">
    <a  href="/restaurantslist/{{$rest->id}}">
      <img src="storage/restaurant/{{$rest->restName}}/{{$rest->restimage}}" alt="Event" width="300" height="100">
    </a>

    <div style="font-family: Arial, Helvetica, sans-serif" class="desc">{{$rest->restdescription}}</div>
  </div>

@endforeach

@endsection

