@extends('layouts.app')

@section('content')

<div class="jumbotron p-3 p-md-5 text-dark rounded bg-light">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">desc</h1>
          <p class="lead my-3">Location.</p>
        
        </div>
</div>
<div class="container">
    
<div class="row m-2">

  <div class="col-md-6">
<div class="row"> 
<img src="/storage/coverimages/party_1524175748.jpg" alt="" width="500" height="300">
</div>
<br>
<div class="row" style="display:inline-block">

  <a class="lightbox" href="#bat">
    <img src="/storage/coverimages/party_1524175748.jpg"/>
 </a> 
 <div class="lightbox-target" id="dog">
    <img src="/storage/coverimages/party_1524175748.jpg"/>
    <a class="lightbox-close" href="#"></a>
 </div>

 <a class="lightbox" href="#dog">
  <img src="/storage/coverimages/party_1524175748.jpg"/>
</a> 
<div class="lightbox-target" id="dog">
  <img src="/storage/coverimages/party_1524175748.jpg"/>
  <a class="lightbox-close" href="#"></a>
</div>

<a class="lightbox" href="#dog">
  <img src="/storage/coverimages/party_1524175748.jpg"/>
</a> 
<div class="lightbox-target" id="dog">
  <img src="/storage/coverimages/party_1524175748.jpg"/>
  <a class="lightbox-close" href="#"></a>
</div>

<a class="lightbox" href="#dog">
  <img src="/storage/coverimages/party_1524175748.jpg"/>
</a> 
<div class="lightbox-target" id="dog">
  <img src="/storage/coverimages/party_1524175748.jpg"/>
  <a class="lightbox-close" href="#"></a>
</div>

<a class="lightbox" href="#dog">
  <img src="/storage/coverimages/party_1524175748.jpg"/>
</a> 
<div class="lightbox-target" id="dog">
  <img src="/storage/coverimages/party_1524175748.jpg"/>
  <a class="lightbox-close" href="#"></a>
</div>

<a class="lightbox" href="#dog">
  <img src="/storage/coverimages/party_1524175748.jpg"/>
</a> 
<div class="lightbox-target" id="dog">
  <img src="/storage/coverimages/party_1524175748.jpg"/>
  <a class="lightbox-close" href="#"></a>
</div>

</div>

  </div>

  <div class="col-md-6 float-right">
   
    <div class="row">

      Description about the event

    </div>
    <div class="row">

      Description about the event
    </div>
    
  </div>

</div>

</div>



@endsection