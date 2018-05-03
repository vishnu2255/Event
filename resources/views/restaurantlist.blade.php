@extends('layouts.app')

@section('content')
<div class="mt-3">

@foreach($rests as $rest)

<div class="gallery" style="width: 400px;height: 300px;background-color:aliceblue">
    <a  href="/restaurantslist/{{$rest->id}}">
      <img src="storage/restaurant/{{$rest->restName}}/{{$rest->restimage}}" alt="Event" style="width: 100%;height: 80%">
    </a>

    <div style="font-family: Arial, Helvetica, sans-serif;overflow: hidden;text-overflow: ellipsis; white-space: nowrap;" class="desc">{{$rest->restName}}</div>
  </div>

@endforeach
</div>
@endsection

