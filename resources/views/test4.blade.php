
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
<script>
$(document).ready(function(){

$(".overlay").show();

$(".close").click(function(e){
e.preventDefault();
  
  $(".overlay").hide();
});

});
</script>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
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
    function goToNewPage()
    {
        var url = document.getElementById('list').value;
        if(url != 'none') {
            window.location = url;
        }
    }
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
  </head>
<!-- NAVBAR
================================================== -->
  <body>
 
<!-- NAVBAR
================================================== -->  
<body> 

================================================== --> 

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

<a href="/Carnivalguide_cover_model__application.php" style="margin-left:100px; margin-top: 20px" class="btn btn-success">Register</a>

            </div>
    
            
          </div>
          
        </div>
      
     </div>
       <form role="form" method="post" action="testingindex.php" id="reused_form" enctype=&quot;multipart/form-data&quot; >
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
                       
                       
<br>
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



// session_start();

// initializing variables
  $name = "";
  $lastname    = "";
  $phone  = "";
  $email  = "";
  $facebook="";
  $ig="";
  $country = "";
  $message  ="";
  $imagepath="";

  $errors = array();

$con = mysql_connect('bowencorp.startlogicmysql.com', 'thinkb1213', 'Carnival@123'); 
if (!$con) { 
    die('Could not connect: ' . mysql_error()); 
} 
#echo 'Connected successfully'; 
mysql_select_db(carnival_1982_dev1); 

if (!$con) {
    echo "Error: " . mysql_error();
	exit();
}
else
{
	#echo "Connected";
}

  if(isset($_POST['submit']))
  {
  $name = mysql_real_escape_string( $_POST['name']);
  $lastname = mysql_real_escape_string( $_POST['lastname']);
  $email = mysql_real_escape_string( $_POST['email']);
  $phone  = mysql_real_escape_string( $_POST['phone']);
  $facebook  = mysql_real_escape_string( $_POST['facebook']);
  $ig  = mysql_real_escape_string( $_POST['IG']);
  $country  = mysql_real_escape_string( $_POST['country']);
  $message  = mysql_real_escape_string( $_POST['message']);
  $imagepath ='/uploads'. $name .'/';

$countfiles = count($_FILES['image'];
// $files = _FILES['image']


for($i=0;$i<$countfiles;$++)
{
//$tmp = $_FILES['image']['name'][$i];
move_uploaded_file($_FILES['image']['name'][$i],$imagepath);

}

  	$query = "INSERT INTO Carnivalparticipants 
              (firstname ,lastname ,phone ,email,facebook,ig,country,messageinfo,imagepath)
VALUES('$name', '$lastname', '$phone','$email','$facebook','$ig','$country','$message','$imagepath')";

  	if(mysql_query($query))
  	{
  		echo 'saved';

  	}
  	else
  	{
  		echo 'not saved';

  	}
  	

  	// $_SESSION['username'] = $username;
  	// $_SESSION['success'] = "You are now registered";   

} 
    
?>