@extends('layouts.app')

@section('content')
<div class="mt-3">

@foreach($packs as $pack)

<div class="gallery" style="width: 400px;height: 300px;background-color:aliceblue">
    <a  href="packageslist/{{$pack->id}}">
      <img src="/../storage/package/{{$pack->name}}/{{$pack->image}}" alt="Event" style="width: 100%;height: 80%">
    </a>

    <div style="font-family: Arial, Helvetica, sans-serif;overflow: hidden;text-overflow: ellipsis; white-space: nowrap;" class="desc">{{$pack->name}}</div>
  </div>

@endforeach
</div>
@endsection

