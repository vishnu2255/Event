@extends('layouts.app')

@section('content')

<div class="container">
<h1 class="m-2"> Food Restaurant Submission</h1>
<p class="m-2">
In this section, you are able to add your food restaurant to our listings for free! For additional exposure, there is an option of adding banners and making your event a featured venue. To view our media kit and ad rates, please send us an email at  
</p>
<hr>
<form action="/postrestaurant" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
    
<div class="row form-group">

        <div class="col-md-4">
                <label  for="">Restaurant Name*</label>
                <br>
                <input id="name" name="name" type="text" class= "form-control"> 
        </div>
    
        <div class="col-md-4">
                <label  for="">Food cuisine*</label>
                <br>
                <input id="cuisine" name="cuisine" type="text" class= "form-control"> 
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

                <div class="col-md-4">
                        <label  for="">Address*</label>
                        <br>
                        <input id="address" name="address" type="text" class= "form-control"> 
                </div>
            
                <div class="col-md-4">
                        <label  for="">Zip*</label>
                        <br>
                        <input id="zip" name="zip" type="text" class= "form-control"> 
                </div>

                <div class="col-md-4">
                        <label  for="">City*</label>
                        <br>
                        <input id="city" name="city" type="text" class= "form-control"> 
                </div>
                
         
            </div>
            <hr>
            <div class="row form-group">

                    <div class="col-md-4">
                            <label  for="">Weekday Hours*</label>
                            <br>
                            <input id="weekday" name="weekday" type="text" class= "form-control"> 
                    </div>
                
                    <div class="col-md-4">
                            <label  for="">Weekend Hours*</label>
                            <br>
                            <input id="weekend" name="weekend" type="text" class= "form-control"> 
                    </div>
                </div>
    
                   
       <hr>       

        <div class="row form-group">
        <div class="col-md-12">
                <label  for="">Description*</label>
                <br>
                <textarea class= "form-control" name="description" id="" rows="5"></textarea>
        </div>
        
        </div>
    
        <hr>
    
{{-- <div class="control-group input-group">
        <input type="file" name="filename[]" class="form-control">
</div> --}}

<div class="form-group">
        <h2 class="mb-2">Restaurant Images</h2>
        <p class="mb-2">In this section, you can add your venue logo along with 4 main images. Although not required, venues with images and a logo attract more attention by the average user. It is highly recommended that you add images. Please bear in mind that jpegs should not exceed 100kb and if image sizes are larger than normal, they will be compressed.</p>
        
        <div class="m-2">
            <h4>Flyer Image</h4>
          
            <label for="file">Choose file to upload</label>
            <br>
            <input type="file" class= "form-control" name="flyerimg" multiple="multiple" >
            {{-- <input type="file" class= "form-control" name="flyerimg[]" multiple="multiple" > --}}
        </div>

        <div class="m-2">
            <h4>Food Images</h4>           
            <label for="file">Choose file to upload</label>
            <br>
<div id="filesupload">
               <div id="file-0"> <input type="file" class= "form-control" value="AddFile" name="uploaded_file[]" multiple></div>
               <div id="file-0"> <input type="file" class= "form-control" value="AddFile" name="uploaded_file[]" multiple></div>
               <div id="file-0"> <input type="file" class= "form-control" value="AddFile" name="uploaded_file[]" ></div>
</div>
           
<br>
            <a class="mb-3 mt-3 btn btn-default" id="imgclick" onclick="addFile()">Click here to add more images</a>
            <br>

        </div>
</div>

<hr>

<div class="form-group">
                <div class="row form-control" id="tempfiles">
                        <div id="file-0">
                                        <input type="file" class= "form-control" value="AddFile" name="uploaded_file[]" multiple>                           
                        </div>  
                            
                 </div> 
                 
                 
</div>
<a href="" id="addtempfile">Add Button</a>
<button class="btn btn-primary" type="submit">Submit Event</button>



</div>

@endsection