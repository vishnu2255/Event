
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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    
 </head>
<body> 

       <form role="form" method="post" action="filesave.php" id="reused_form" enctype=&quot;multipart/form-data&quot; >
                       <div class="row">

          <div class="col-md-4">
          
           <label for="name"> Head Shot:</label>
                                    <input type="file" class="form-control input-lg" id="image" name="image[]" multiple >
                                
          </div>
          <div class="col-md-4">
          <label for="name"> Full Body 2:</label>
                                    <input type="file" class="form-control input-lg" id="image2" name="image[]" multiple >
          </div>
          <div class="col-md-4">
          <label for="name"> Full Body 1:</label>
                                    <input type="file" class="form-control input-lg" id="image3" name="image[]" multiple >
          </div>
        </div>
                        <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Post It! &rarr;</button>
                    </form>                    
            </div>
  </div>
  </div>
  
</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="docs/dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
   



  </body>
</html>


<?php

  if(isset($_POST['submit']))
  {

$imagepath ='/uploads'. '/';
echo $imagepath;
//$filename_1 = $_FILES['image']['name'][0];
//$countfiles = "123";

// ($FILES);

} 
    



foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
 
    $file_name = $key.$_FILES['files']['name'][$key];
    $file_size =$_FILES['files']['size'][$key];
    $file_tmp =$_FILES['files']['tmp_name'][$key];
    $file_type=$_FILES['files']['type'][$key];	

 move_uploaded_file($file_tmp,"user_data/".$file_name);

}

    ?>