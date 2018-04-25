@extends('layouts.app')

@section('content')

<div class="container">
<h1 class="m-2"> Event Submission</h1>
<p class="m-2">
In this section, you are able to add your event to our listings for free! For additional exposure, there is an option of adding banners and making your event a featured venue. To view our media kit and ad rates, please send us an email at  
</p>
<hr>
<form action="/post" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}

<div class="row form-group">

        <div class="col-md-4">
                <span class="m-2">Select Destination</span>
                        <select class="form-control" name="carnivaldest" id="">
                                        <option value="toronto">Toronto</option>
                                        <option value="barbados">Barbados</option>
                                        <option value="guyana">Guyana</option>
                                        <option value="stlucia">St Lucia</option>
                                </select>
        </div>


</div>

<div class="row form-group">


<div class="col-md-4">

    <label for="">Type*</label>
    <br>
    <input id="type1"  type="radio" value="Special" name="event"> <span>Special</span>
    <br>
    <input id="type1"  type="radio" value="Weekly" name="event"> <span> Weekly</span>
</div>


<div class="col-md-4">
 
<label for="">Date</label>  
<br>
<input name="date" class= "form-control" type="date" value="" >
</div>

</div>
<hr>

<div class="row form-group">

    <div class="col-md-4">
            <label  for="">Name*</label>
            <br>
            <input id="name" name="name" type="text" class= "form-control"> 
    </div>

    <div class="col-md-4">
            <label  for="">Club*</label>
            <br>
            <input id="club" name="club" type="text" class= "form-control"> 
    </div>
    
    <div class="col-md-4">
            <label  for="">Hours*</label>
            <br>
            <input type="text" name="hours" class= "form-control"> 
    </div>
</div>
<hr>
<div class="row form-group">

        <div class="col-md-4">
                <label  for="">PhoneNumber*</label>
                <br>
                <input name="phone" type="tel" class= "form-control"> 
        </div>
    
        <div class="col-md-4">
                <label  for="">Email*</label>
                <br>
                <input name="email" type="email" class= "form-control"> 
        </div>
        
        <div class="col-md-4">
                <label  for="">Website*</label>
                <br>
                <input name="website" type="url" class= "form-control"> 
        </div>
    </div>

    <div class="row form-group">
    <div class="col-md-12">
            <label  for="">Description*</label>
            <br>
            <textarea class= "form-control" name="description" id="" rows="5"></textarea>
    </div>
    
    </div>

    <div class="row form-group">
            <div class="col-md-12">
                    <label  for="">Notes*</label>
                    <br>
                    <input name="notes" type="text" class= "form-control">
            </div>
            
    </div>
    <div class="row form-group">
            <div class="col-md-12">
                    <label  for="">DJs*</label>
                    <br>
                    <input name="djname" type="text" class= "form-control">
            </div>
            
    </div>

    <hr>


    <div class="jumbotron" style="height: 5%">
            <h2 class="mb-2">Event Details</h2>
        <label for="">New Year's Eve</label>
<br>
<input type="checkbox" name="maineventtype[]" id="" value="clubevent"> <span>Club Event</span> &nbsp;
<input type="checkbox" name="maineventtype[]" id="" value="hotelevent"> <span>Hotel Event</span>
    </div>
<hr>

<div class="form-group">
        <h3 class="mb-2">Event Type</h3>
        <p class="mb-1">Select the categories that best describe your venue (please do not select all the categoires)</p>

        <div class="row">
      <div class="col-md-3">
       <input type="checkbox" name="eventcat[]" id="1" value="NBA All star 2018"> <span> NBA All star 2018 </span>    
       </div>

       <div class="col-md-3">
        <input type="checkbox" name="eventcat[]" id=""> <span> Old School Beat </span>    
        </div>
        <div class="col-md-3">
                <input type="checkbox" name="eventcat[]" id=""> <span> Old 40</span>    
        </div>
        <div class="col-md-3">
                <input type="checkbox" name="eventcat[]" id=""> <span>New Years Eve 2013</span>    
        </div>
</div>   
<div class="row">
        <div class="col-md-3">
         <input type="checkbox" name="eventcat[]" id="">  <span> Christmas </span>    
         </div>
  
         <div class="col-md-3">
          <input   type="checkbox" name="eventcat[]" id=""> <span> Good Friday </span>    
          </div>
          <div class="col-md-3">
        <input  type="checkbox" name="eventcat[]" id=""> <span> Labour Day</span>    
          </div>
          <div class="col-md-3">
                <input type="checkbox" name="eventcat[]" id=""><span> Victoria Day</span>    
          </div>
  </div> 

</div>
<hr>

<div class="form-group">
    <h2 class="mb-2">Minimum Age</h2>
    <p class="mb-2"> Select the minimum age required to attend the event </p>
<label for="" class="radio-inline">
<input type="radio" name="age" value="21+ for men, 19+ for ladies" > <span>21+ for men, 19+ for ladies</span> 
</label>

<label for="" class="radio-inline">
        <input type="radio" name="age" value="All Ages"><span>All Ages</span>
</label>
        

<label for="" class="radio-inline">
        <input type="radio" name="age" value="19+">19+
</label>


<label for="" class="radio-inline">
        <input type="radio" name="age" value="21+">21+
</label>

</div>
<hr>

<div class="form-group jumbotron">

    <h2 class="mb-2">Music</h2>
    <p class="mb-1">Select the types of music that is played at the venue</p>
        <div class="row">
                <div class="col-md-3">
                 <input type="checkbox" name="eventmusic[]" id=""> <span> Halloween Anthem </span>    
                 </div>
          
                 <div class="col-md-3">
                  <input type="checkbox" name="eventmusic[]" id=""> <span> Techno </span>    
                  </div>
                  <div class="col-md-3">
                          <input type="checkbox" name="eventmusic[]" id=""> <span> Electro</span>    
                  </div>
                  <div class="col-md-3">
                          <input type="checkbox" name="eventmusic[]" id=""> <span>New Years Eve 2013</span>    
                  </div>
          </div>   
          <div class="row">
                  <div class="col-md-3">
                   <input type="checkbox" name="eventmusic[]" id="">  <span> Soca </span>    
                   </div>
            
                   <div class="col-md-3">
                    <input   type="checkbox" name="eventmusic[]" id=""> <span> Country </span>    
                    </div>
                    <div class="col-md-3">
                  <input  type="checkbox" name="eventmusic[]" id=""> <span> Punk </span>    
                    </div>
                    <div class="col-md-3">
                          <input type="checkbox" name="eventmusic[]" id=""><span> Salsa </span>    
                    </div>
            </div> 

</div>

<div class="form-group">

    <h3 class="mb-1">Cover</h3>
    <p class="mb-1">Please select cover price with and without guestlist</p>
<input type="radio" name="cover" id="" value="Free" > Free
<br>
<input type="radio" name="cover" id="" value="$20"> $20
<br>
<input type="radio" name="cover" id="" value="$30"> $30

</div>

<div class="form-group jumbotron">
<h2 class="mb-2">Dress Code</h2>
<p class="mb-2">Please select ONE of the appropriate dress codes that apply</p>

<input type="radio" name="dress" value="Ugly Holiday Sweaters" id=""> Ugly Holiday Sweaters
<br>
<input type="radio" name="dress" value="Formal" id=""> Formal
<br>
<input type="radio" name="dress" value="Semi Formal" id=""> Semi Formal


</div>

<div class="form-group">
        <h2 class="mb-2">Event Images</h2>
        <p class="mb-2">In this section, you can add your venue logo along with 4 main images. Although not required, venues with images and a logo attract more attention by the average user. It is highly recommended that you add images. Please bear in mind that jpegs should not exceed 100kb and if image sizes are larger than normal, they will be compressed.</p>
        
        <div class="m-2">
            <h4>Event Flyer Image</h4>
          
            <label for="file">Choose file to upload</label>
            <br>
            <input type="file"  name="flyerimg">
        </div>

        <div class="m-2">
            <h4>Event Images</h4>           
            <label for="file">Choose file to upload</label>
            <br>
<div id="filesupload">
               <div id="file-0"> <input type="file" value="AddFile" name="uploaded_file[]"></div>
</div>
           
<br>
            <a class="mb-3 mt-3 btn btn-default" id="imgclick" onclick="addFile()">Click here to add more images</a>
            <br>

        </div>
</div>

<div class="form-group jumbotron">
<h2 class="mb-3">GUEST LIST</h2>
<p class="mb-3">This is an optional feature if your event requires guestlist. If your event does not require guestlist, you are not required to fill in the below information.</p>

<div class="row">

    <div class="col-md-4">
        <label for="">Guestlist Benefits</label>
        <input class="form-control" type="text" name="guestbenefits" id="">
    </div>

    
    <div class="col-md-4">
            <label for="">Guestlist Name</label>
            <input class="form-control" type="text" name="guestname" id="">
        </div>

        
    <div class="col-md-4">
            <label for="">Email Address</label>
            <input class="form-control" type="email" name="guestemail" id="">
        </div>


</div>

</div>


<div class="form-group">
    <h3 class="mb-4">Bottle Service</h3>
<div class="row">
       <div class="col-md-5">
            <label for="">Title</label>
            <input class="form-control" type="text" name="servicename" id="">    
       </div>
       <div class="col-md-5">
            <label for="">Price</label>
            <input class="form-control" type="text" name="servicetitle" id="">    
       </div>
</div>

<div class="row">
        <div class="col-md-5">
             <label for="">Email</label>
             <input class="form-control" type="email" name="serviceemail" id="">    
        </div>
        <div class="col-md-5">
             <label for="">PhoneNumber</label>
             <input class="form-control" type="tel" name="servicephonenum" id="">    
        </div>
 </div>



</div>
<hr>
<button class="btn btn-primary" type="submit">Submit Event</button>

</form>


</div>

@endsection