@extends('layouts.app')

@section('content')

<div class="container m-3" id="maincostumediv">
       
       
        <h1 class="m-2"> Costume Submission</h1>
        <p class="m-2">
        In this section, you are able to add your costume to our listings for free! For additional exposure, there is an option of adding banners and making your event a featured venue. To view our media kit and ad rates, please send us an email at  
        </p>
        <hr>
        <form action="/postcostume" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}

<div class="row">
        <div class="col-md-4">                
                <input id="name" name="name" placeholder="Band name" type="text" class= "form-control"> 
        </div>    
</div>
    <hr>
   <div id="secdetails">

    <input id="secbutn" name="section" type="text" placeholder="Section" class= "form-control"> 
    <br>
    <br>
    <button class="btn btn-warning float-right addcat" >Add Category</button>    
     <br>

    {{-- <div id="costumesection">                       --}}
                        <input name="category[]" placeholder="CategoryName" type="text" class= "form-control"> 
                        <br>
                        <input name="price[]" type="text" placeholder="Price" class= "form-control"> 
                <br>
                {{-- <input name="category[]" placeholder="CategoryName" type="text" class= "form-control"> 
                <br>
                <input name="price[]" type="text" placeholder="Price" class= "form-control"> 
        <br>
        <input name="category[]" placeholder="CategoryName" type="text" class= "form-control"> 
        <br>
        <input name="price[]" type="text" placeholder="Price" class= "form-control"> 
<br>
<input name="category[]" placeholder="CategoryName" type="text" class= "form-control"> 
<br>
<input name="price[]" type="text" placeholder="Price" class= "form-control"> 
<br> --}}
        {{-- </div> --}}
   </div>

     
<br>  
<hr>  
<div class="row form-group">
        <div class="col-md-12">
                <label  for="">Description*</label>
                <br>
                <textarea class= "form-control" name="description" id="article-ckeditor" rows="5"></textarea>
        </div>
        
</div>

<div class="form-group">
        <h2 class="mb-2">Costume Images</h2>
        <p class="mb-2">In this section, you can add your image along with 4 main images. Although not required, venues with images and a logo attract more attention by the average user. It is highly recommended that you add images. Please bear in mind that jpegs should not exceed 100kb and if image sizes are larger than normal, they will be compressed.</p>
        
        <div class="m-2">
            <h4>Flyer Image</h4>
          
            <label for="file">Choose file to upload</label>
            <br>
            <input type="file" class= "form-control" name="flyerimg" multiple="multiple" >
            {{-- <input type="file" class= "form-control" name="flyerimg[]" multiple="multiple" > --}}
        </div>
</div>

        <h4>costume Images</h4>           
        <label for="file">Choose files to upload</label>
        <br>
        <div class="form-control" id="tempfiles">
                <div id="file-0">
                                <input type="file" class= "form-control" value="AddFile" name="uploaded_file[]" multiple>                           
                </div>  
                    
         </div> 
         
         <a href="" id="addtempfile">Add Button</a>   


</div>
<button class="btn btn-danger" type="submit">Submit</button>
</form>
{{-- <button class="btn btn-danger" id="addSectionnew">Add Section</button> --}}
{{-- <button class="btn btn-danger" id="addSectionnew"> Add New Section </button> --}}


@endsection