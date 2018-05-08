@extends('layouts.app')
@section('content')

<div class="container m-2" style="height: 200px;width: 600px;">
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