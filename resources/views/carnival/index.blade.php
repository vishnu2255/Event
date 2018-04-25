
@extends('carnivallayouts.app')

@section('content')
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
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

  
 <div class="darkbg">
 <div class="containerA" > 
 <form class="form-inline" >
 <label for="list"><h2 style="color:#FFF">Select A Carnival Destination &nbsp;</h2></label>
 <select style="margin-bottom:4px" class="form-control input-lg" name="list" id="list" accesskey="target">
 
            <option value="Toronto_Caribbean_Carnival/">Toronto Canada (Toronto Caribbean Carnival)</option>
            <option value="Crop_Over">Barbados (Crop Over)</option>
            <option value="/Guyana_Carnival/">Guyana (Guyana Carnival)</option>
            
             <option value="/Saint_Lucia_Carnival/">St. Lucia (St. Lucia Carnival)</option>&nbsp;&nbsp;
  <select>
  
  <input type="button" class="btn btn-primary btn-lg" value="Go" onclick="goToNewPage()" />
         
          </form> 
       
  </div>
  </div>
  
<div class="container" style="position:relative">
<br><br><br><br><br><br><br><br><br><br>
<h1 align="center" > We are here to enhance your overall carnival experience </h1>
 
<h3 style="color:#666; text-align:center">Carnival Guide Intl is the ultimate resource for visitors and residents, as it covers everything they need to know about what to do, what to see, how to travel, and where to eat during the weeks of Carnival.</h3> <br><br><br><br><br><br><br>
 
 </div>

<div class="row">
  <div class="col-md-3"><a href="/Toronto_Caribbean_Carnival"><img src="img/Toronto_carnival.jpg" width="100%"></a>
  
    <div class="sectionwrap">
  <h2>Toronto</h2>
  <p dir="ltr">Toronto Caribbean Carnival is the largest Caribbean carnival in North America. The festival continues to gain popularity, with approximately 1 million attendees from around the world, eager to explore Caribbean culture.</p>
  <br><br>
<a class="btn btn-default btn-lg" href="/Toronto_Caribbean_Carnival" role="button">Go to Carnival</a>


    </div>
  </div>
  <div class="col-md-3"> <a href="/Crop_Over"><img src="img/barbados_carnival.jpg" width="100%"></a>  
  <div class="sectionwrap">
  <h2>Barbados</h2>
  <p>The Crop Over summer festival is Barbados' most popular and colourful festival. At the end of the sugar season, there was always a huge celebration to mark the culmination of another successful sugar cane harvest - the Crop Over celebration.</p>
    <br><br>
<a class="btn btn-default btn-lg" href="/Crop_Over" role="button">Go to Carnival</a>
  </div>
  </div>
  <div class="col-md-3" width="100%"><a href="/Saint_Lucia_Carnival"><img src="img/St_lucia_carnival.jpg" width="100%"></a>
    <div class="sectionwrap">
      <h2>St. Lucia</h2>
  <p>A rich display of Saint Lucian culture, Lucian Carnival pays homage to the island&rsquo;s African and Catholic heritage. Today, Lucian Carnival is widely lauded as one of the Caribbean&rsquo;s most exciting festivals.</p>
  <br>
    <br>
<a class="btn btn-default btn-lg" href="/Saint_Lucia_Carnival" role="button">Go to Carnival</a>
</div>
  </div>
  <div class="col-md-3"><img src="img/guyana_carnival.jpg" width="100%">
 <div class="sectionwrap">
  <h2>Guyana</h2>
  <p>Guyana Carnival is a privately owned festival being launched this year. It&rsquo;s an amalgamation of influential entertainment bodies, the Government and other key stakeholders to create a new exciting product to boost tourism, entertainment, and nightlife in our emerging city</p>
    <br>
<a class="btn btn-default btn-lg" href="/Guyana_Carnival" role="button">Go to Carnival</a>
  </div>
  </div>
</div>

 
  
  <br><br><br><br><br><br><br>
  <div class="contestlarge">
  <div class="row" style=" background-color:#000; display: flex;">
  <div class="col-md-4" style="background-color:#ff4256">
  <div class="formwrap">
  
  <h2 align="center" style="color:#FFF">Be the 2018 Cover Model!</h2>
  
  <hr/>
 <p>Complete the form below to be entered into the 2018 Cover model contest. This year we will be covering 2 new carnival locations; Guyana and Barbados. 
   <div class="row">
                    <form role="form" method="post" id="reused_form" enctype=&quot;multipart/form-data&quot; >
                       <div class="row">
  <div class="col-md-6">
  <input type="text" class="form-control input-lg" placeholder="First Name" class="form-control" id="name" name="name" required maxlength="50">
  </div>
  <div class="col-md-6">
    <input type="text" class="form-control input-lg" placeholder="Last Name"   class="form-control" id="lastname" name="lastname" required maxlength="50">
  </div>
</div><br>
      <div class="row">
  <div class="col-md-6">
    <input type="text" class="form-control input-lg" placeholder="Phone" class="form-control" id="phone" name="phone" required maxlength="50">
  </div>
  <div class="col-md-6">
    <input type="email" class="form-control input-lg" placeholder="Email"  class="form-control" id="email" name="email" required maxlength="50">
  </div>
</div>     <br>
      
          <div class="row">
  <div class="col-md-6">
  <input type="text" class="form-control input-lg" placeholder="Facebook ID"  class="form-control" id="facebook" name="facebook" required maxlength="50">
  </div>
  <div class="col-md-6">
    <input type="text" class="form-control input-lg"  placeholder="Instagram ID" class="form-control" id="IG" name="IG" required maxlength="50">
  </div>
</div>            
<br>
                 
             <div class="row">
  <div class="col-md-6">
    <label for="country">I would like to be the cover model for: </p>
  </label>
  </div>
  <div class="col-md-6">
  <select name="country" class="form-control input-lg" id="country">
    <option value="blank" class="form-control input-lg" >Select</option>
      <option value="Toronto" class="form-control input-lg" >Toronto Caribbean Carnival</option>
  <option value="Barbados" class="form-control input-lg" >Barbados Crop Over</option>
  <option value="Guyana" class="form-control input-lg" >Guyana Carnival</option>
  <option value="lucia" class="form-control input-lg" >St Lucia Carnival</option>
    
    </select>
  </div>
</div>    

                            <label for="name"> </label>
                            <textarea class="form-control" type="textarea" name="message" id="message" placeholder="Why should you be the 2018 Cover Model" maxlength="6000" rows="3"></textarea>
                            <br>
                       
<div class="row">
<div class="alert alert-danger">
        *NOTE if images are larger than 2MB this form will not work. Email your submission to models@carnivalguideintl.com
</div>

  <div class="col-md-4">
  
 
  
  
   <label for="name"> Head Shot:</label>
                            <input type="file" class="form-control input-lg" id="image" name="image" required>
                        
  </div>
  <div class="col-md-4">
  <label for="name"> Full Body 2:</label>
                            <input type="file" class="form-control input-lg" id="image2" name="image2" required>
  </div>
  <div class="col-md-4">
  <label for="name"> Full Body 1:</label>
                            <input type="file" class="form-control input-lg" id="image3" name="image3" required>
  </div>
</div>                       
<br>
                        <button type="submit" class="btn btn-success btn-lg btn-block" id="btnContactUs">Post It! &rarr;</button>
                    </form>
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Sent your message successfully!</h3> </div>
                    <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>              
            </div>
  </div>
  </div>
  <div class="col-md-8" >
<div class="video-wrapper ">
<iframe src="http://www.youtube.com/embed/8DNmdUBbd6g?autoplay=0&amp;html5=1" frameborder="0" allowfullscreen></iframe>
</div>
    
</div>
  
  </div>
</div>




<!--

 mobile form start 
 
 -->


<div class="contestsmall">
<div class="video-wrapper ">
<iframe src="http://www.youtube.com/embed/8DNmdUBbd6g?autoplay=0&amp;html5=1" frameborder="0" allowfullscreen></iframe>
</div>
<a class="btn btn-success btn-lg btn-block" href="/Carnivalguide_cover_model__application.php">ENTER THE COVER MODEL CONTEST</a>

</div>

@endsection

