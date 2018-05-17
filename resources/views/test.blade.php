
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
 

  $imagepath ="test/".$name;


if(!empty($_FILES['files']['name'][0]))
{


$files = $_FILES['files'];
print_r($files);
foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
 
    $file_name = $key.$_FILES['files']['name'][$key];
    $file_size =$_FILES['files']['size'][$key];
    $file_tmp =$_FILES['files']['tmp_name'][$key];
    $file_type=$_FILES['files']['type'][$key];	

if(is_dir($res)==false)
{
 mkdir("$res", 0700);  
}

move_uploaded_file($file_tmp,$imagepath . "/".$file_name);

}
   
} 




	$query = "INSERT INTO Carnivalparticipants 
              (firstname ,lastname ,phone ,email,facebook,ig,country,messageinfo,imagepath)
VALUES('$name', '$lastname', '$phone','$email','$facebook','$ig','$country','$message','$imagepath')";

  	if(mysql_query($query))
  	{
  		echo 'You are now registered';
          
  	 $_SESSION['success'] = "You are now registered"; 
  	}
  	else
  	{
  		echo 'not saved';

  	}
  	

  	// $_SESSION['username'] = $username;
  	// $_SESSION['success'] = "You are now registered";   

} 
    
?>



if(!empty($_FILES['files']['name'][0]))
{


$files = $_FILES['files'];
print_r($files);
foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
 
    $file_name = $key.$_FILES['files']['name'][$key];
    $file_size =$_FILES['files']['size'][$key];
    $file_tmp =$_FILES['files']['tmp_name'][$key];
    $file_type=$_FILES['files']['type'][$key];	

if(is_dir($res)==false)
{
 mkdir("$imagepath", 0700);  
}

move_uploaded_file($file_tmp,$imagepath . "/".$file_name);

}
   
} 


