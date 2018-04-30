@extends('layouts.app')
@section('content')

<div class="container m-2" style="height: 600px;width: 400px;">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner"> 
    <?php $cnt=0;?>
     @foreach($banners as $banner)
      
        @if($cnt == 0)
        <div class="carousel-item active" style="height: 600px;width: 400px;">
        <a href="{{$banner->url}}" target="_blank">        
             <img style="width: 100%;max- height: 100%"  src="../storage/banners/1/{{$banner->image}}" alt="image">
         </a>
           </div>
        @else
        <div class="carousel-item" style="height: 600px;width: 400px;">
            <a href="{{$banner->url}}" target="_blank">        
             <img style="width: 100%;max- height: 100%"  src="../storage/banners/1/{{$banner->image}}" alt="image">
         </a>
           </div>
        @endif
        <?php $cnt++;?>


        @endforeach

        
        
          
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