@extends('layouts.app')
@section('content')


<div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: 200px;width: 200px;">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active" style="height: 200px;width: 200px;">
        <img style="width: 100%; height: 100%"  class="first-slide" src="../storage/coverimages/party_1524175748.jpg" alt="First slide">

      </div>
      <div class="carousel-item" style="height: 200px;width: 200px;">
        <img style="width: 100%; height: 100%" class="second-slide" src="../storage/coverimages/party_1524175748.jpg" alt="Second slide">
       
      </div>
      <div class="carousel-item" style="height: 200px;width: 200px;">
        <img style="width: 100%; height: 100%"  class="third-slide" src="../storage/coverimages/party_1524175748.jpg" alt="Third slide">
      
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<div class="container" style="height: 200px;width: 600px;">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" style="height: 200px;width: 600px;">
            <img style="width: 100%; height: 100%" class="d-block " src="../storage/coverimages/party_1524175748.jpg" alt="First slide">
          </div>
          <div class="carousel-item" style="height: 200px;width: 600px;">
            <img style="width: 100%; height: 100%" class="d-block" src="../storage/coverimages/party_1524175748.jpg" alt="Second slide">
          </div>
          <div class="carousel-item" style="height: 200px;width: 600px;">
            <img style="width: 100%; height: 100%" class="d-block" src="../storage/coverimages/party_1524175748.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</div>


      @endsection