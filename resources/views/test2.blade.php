<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="docs/favicon1.ico">

    <title>CarnivalGuide Intl.</title>


    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <link href="css/carousel.css" rel="stylesheet">
  <link href="css/Custom.css" rel="stylesheet" type="text/css">
  <link href="css/video.css" rel="stylesheet">

<style>

.overlay {
  display: none;
  position: absolute;
  top: 100px;
  left: 250px;
  width: 700px;
  height: 400px;
  background: floralwhite;
  z-index: 1;
  }

.close {
  position: absolute;
  top: 10px;
  right: 20px;
  }
.product {
  position: absolute;
  top: 30px;
  left: 20px;
  }

  .productImage {
  width: 350px;
  display: block;
  float: left;
  margin-right: 20px;
  position: relative;
  height: 300px;
  border: royalblue 1px;
  }

  .cont {
  float: right;
  font: 500 15px/16px Arial;  
  width: 300px;
  margin-top: 100px;

  /* background-color: black; */
  }

</style>  
 
  
   <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
        
    <script type="text/javascript">              
 $(function () {
    $('.marquee').marquee({
        duration: 5000,
         duplicated: true,
         gap: 00, 
         direction: 'left',
         pauseOnHover: true
    });
});
</script> 
		 <script type="text/javascript">
    function goToNewPage()
    {
        var url = document.getElementById('list').value;
        if(url != 'none') {
            window.location = url;
        }
    }
</script>
  </head>
<!-- NAVBAR
================================================== -->
  <body>

 <div class="overlay">
        <div class="popup">
          <a href="#" class="close">Close X</a>
          
          <div class="product">  
            <div class="productImage">
            <img class="productImage1" style="width: 100%; height: 100%" src="img/slides/Alana_2017.jpg" />
          </div>

            <div class="cont">

<em>
        Registrations extended till May 25th 2018.
        Please click here to register 
</em>              

<a href="" style="margin-left:100px; margin-top: 20px" class="btn btn-success">Register</a>

            </div>
    
            
          </div>
          
        </div>
      
     </div>


    <!-- Carousel
    ================================================== -->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="img/slides/Alana_2017.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
            
            </div>
          </div>
        </div>
        
        <div class="item">
          <img class="second-slide" src="img/slides/guy_girls.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              
            </div>
          </div>
        </div>
          
          <div class="item">
          <img class="third-slide" src="img/slides/Solange_2016.jpg" alt="third slide">
          <div class="container">
            <div class="carousel-caption">
              
            </div>
          </div>
          </div>
          
          <div class="item">
          <img class="forth-slide" src="img/slides/group.jpg" alt="forth slide">
          <div class="container">
            <div class="carousel-caption">
             
            </div>
          </div>
          </div>
          
          <div class="item">
          <img class="fifth-slide" src="img/slides/Tiffany_2015.jpg" alt="fifth slide">
          <div class="container">
            <div class="carousel-caption">
             
            </div>
          </div>
          </div>
  
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

  
      {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

$(".overlay").show();

$(".close").click(function(e){
e.preventDefault();
  
  $(".overlay").hide();
});

});
</script>
    {{-- <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script> --}}
    <script src="docs/dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
   



  </body>
</html>
