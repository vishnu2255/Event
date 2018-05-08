@extends('layouts.app')

@section('content')
<div class="mt-3">

@foreach($costumes as $costume)

<div class="gallery" style="width: 400px;height: 300px;background-color:aliceblue">
    <a  href="costumeslist/{{$costume->id}}">
      <img src="/../storage/costume/{{$costume->band}}_{{$costume->section}}/{{$costume->image}}" alt="costume" style="width: 100%;height: 80%">
    </a>

    <div style="font-family: Arial, Helvetica, sans-serif;overflow: hidden;text-overflow: ellipsis; white-space: nowrap;" class="desc"> <span>  {{$costume->band}}  </span> <span> {{$costume->section}} </span> </div>
  </div>

@endforeach
</div>
@endsection

