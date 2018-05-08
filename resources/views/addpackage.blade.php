@extends('layouts.app')

@section('content')

<div class="container">
<h1 class="m-2"> Package Submission</h1>
<p class="m-2">
In this section, you are able to add your package to our listings for free! For additional exposure, there is an option of adding banners and making your event a featured venue. To view our media kit and ad rates, please send us an email at  
</p>
<hr>
<form action="/postpackage" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
    
 <select style="margin:4px" class="form-control input-lg" name="country" id="list" accesskey="target">
                <option value="Toronto/">Select A Carnival Desstination</option>
            <option value="Toronto">Toronto Canada (Toronto Caribbean Carnival)</option>
            <option value="Barbados">Barbados (Crop Over)</option>
            <option value="GUyana">Guyana (Guyana Carnival)</option>
            
             <option value="SaintLucia">St. Lucia (St. Lucia Carnival)</option>&nbsp;&nbsp;
  <select>
<div class="row form-group">
        <div class="col-md-4">
                <label  for="">Package Name*</label>
                <br>
                <input id="name" name="name" type="text" class= "form-control"> 
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
            

        </div>
    
  
                 
       <hr>       

        <div class="row form-group">
        <div class="col-md-12">
                <label  for="">Description*</label>
                <br>
                <textarea class= "form-control" name="description" id="article-ckeditor" rows="5"></textarea>
        </div>
        
        </div>
    
        <hr>

<div class="form-group">
        <h2 class="mb-2">Package Images</h2>
        <p class="mb-2">In this section, you can add your package image along with 4 main images. Although not required, venues with images and a logo attract more attention by the average user. It is highly recommended that you add images. Please bear in mind that jpegs should not exceed 100kb and if image sizes are larger than normal, they will be compressed.</p>
        
        <div class="m-2">
            <h4>Flyer Image</h4>
          
            <label for="file">Choose file to upload</label>
            <br>
            <input type="file" class= "form-control" name="flyerimg" multiple="multiple" >
            {{-- <input type="file" class= "form-control" name="flyerimg[]" multiple="multiple" > --}}
        </div>


</div>

<div class="form-group">
        <h4>Food Images</h4>           
        <label for="file">Choose files to upload</label>
        <br>
        <div class="row form-control" id="tempfiles">
                <div id="file-0">
                                <input type="file" class= "form-control" value="AddFile" name="uploaded_file[]" multiple>                           
                </div>  
                    
         </div> 
         
         <a href="" id="addtempfile">Add Button</a>   
</div>

<hr>

<button class="btn btn-primary" type="submit">Submit Event</button>

</div>

@endsection