<?php
session_start();

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

// $con = @mysqli_connect('bowencorp.startlogicmysql.com', 'thinkb1213', 'Carnival@123', 'carnival_1982_dev1');


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
  $imagepath ="/uploads";
//   $files= $_FILES['image'];
//   $target = '/contestimages/';

// Finally, register user if there are no errors in the form
 
  	$query = "INSERT INTO Carnivalparticipants 
              (firstname ,lastname ,phone ,email,facebook,ig,country,messageinfo,imagepath)
VALUES('$name', '$lastname', '$phone','$email','$facebook','$ig','$country','$message','$imagepath')";

  	if(mysql_query($query))
  	{
  		#echo 'saved';

  	}
  	else
  	{
  		#echo 'not saved';

  	}
  	

  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now registered";    

    

?>


<div class="row">

        *NOTE if images are larger than 2MB this form will not work. Email your submission to models@carnivalguideintl.com
          <div class="col-md-4">
          
         
          
          
           <label for="name"> Head Shot:</label>
                                    <input type="file" class="form-control input-lg" id="image" name="image[]" required>
                                
          </div>
          <div class="col-md-4">
          <label for="name"> Full Body 2:</label>
                                    <input type="file" class="form-control input-lg" id="image2" name="image[]" required>
          </div>
          <div class="col-md-4">
          <label for="name"> Full Body 1:</label>
                                    <input type="file" class="form-control input-lg" id="image3" name="image[]" required>
          </div>
        </div>