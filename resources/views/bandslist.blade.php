@extends('layouts.app')

@section('content')
<div class="container mt-3">

@foreach($bands as $band)

<div class="gallery" style="width: 400px;height: 300px;background-color:aliceblue">
    <a  href="/bandslist/{{$band->id}}">
      <img src="storage/band/{{$band->name}}/{{$band->image}}" alt="Band" style="width: 100%; height: 80%">
    </a>

    <div style="font-family: Arial, Helvetica, sans-serif;overflow: hidden;text-overflow: ellipsis; white-space: nowrap; " class="desc">{{$band->name}}</div>
  </div>

@endforeach

@endsection

