@extends('carnivallayouts.app');

@section('content')

<div class="group1 m-2" style="height: 200px;width: 200px;border: 2px solid">

<img style="width: 100%; height: 100%" src="../storage/banners/1/temp21525107779.jpeg" alt="">

</div>

<div class="group1 m-2" style="height: 200px;width: 200px;border: 2px solid">

  <img style="width: 100%; height: 100%" src="../storage/coverimages/party_1524175748.jpg" alt="">
  
  </div>
{{-- 
  <div class="group1 m-2" style="max-height: 400px;max-width: 400px;border: 2px solid">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      
      <div class="carousel-inner" role="listbox">
        <div class="item active" style="max-height: 300px;max-width: 300px;">
          <img style="width: 100%; height: 100%" class="first-slide" src="img/slides/Alana_2017.jpg" alt="First slide">
          
        </div>
        
        <div class="item" style="max-height: 300px;max-width: 300px;">
          <img style="width: 100%; height: 100%" class="second-slide" src="img/slides/guy_girls.jpg" alt="Second slide">
        </div>
          
          <div class="item" style="max-height: 300px;max-width: 300px;">
          <img style="width: 100%; height: 100%" class="third-slide" src="img/slides/Solange_2016.jpg" alt="third slide">          
          </div>
                 
  
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    </div>
  </div> --}}

 
  <div id="myCarousel" class="carousel slide" style="height: 200px;width: 200px;" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    
    <div class="carousel-inner" >
      <div class="carousel-item active" style="height: 200px;width: 200px;">
        <img style="width: 100%; height: 100%" class="first-slide" src="img/slides/Alana_2017.jpg" alt="First slide">

      </div>
      
      <div class="carousel-item" style="height: 200px;width: 200px;">
        <img style="width: 100%; height: 100%" class="second-slide" src="img/slides/guy_girls.jpg" alt="Second slide">

      </div>
        
        <div class="carousel-item" style="height: 200px;width: 200px;">
        <img style="width: 100%; height: 100%" class="third-slide" src="img/slides/Solange_2016.jpg" alt="third slide">        
        </div>
     

    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


      @endsection
  