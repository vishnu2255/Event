<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <title>Carnival Participants List</title>
  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
$(".checkbox").click(function(){
   
    var str =$(this).attr("id");
    var resarr= str.split("_");
    var id = resarr[1];
    if($(this).is(":checked"))
    {
         //alert(true);
         var sel = "yes";
         var xmlhttp = new XMLHttpRequest();
         xmlhttp.open("GET","updateList.php?id="+id+"&sel="+sel,true);
         xmlhttp.send(null);
    }
    else if($(this).is(":not(:checked)")){
//alert(false);

         var sel = "no";
         var xmlhttp = new XMLHttpRequest();
         xmlhttp.open("GET","updateList.php?id="+id+"&sel="+sel,true);
         xmlhttp.send(null);
    }
   
});

});

</script>

<h1>Participants List </h1>

<table class="table table-striped">
<th scope="col">
    <h3>Name</h3>
</th>

<th scope="col">
    <h3>Phone</h3>
</th>

<th scope="col">
    <h3>Email</h3>
</th>

<th scope="col">
    <h3>Country</h3>
</th>

<th scope="col">
    <h3>Images</h3>
</th>

<th scope="col">
    <h3>Selected</h3>
</th>


<?php

session_start();

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
    
    $query = "select * from Carnivalparticipants";
    $result = mysql_query($query);

    while($row = mysql_fetch_assoc($result))
    {

      $id = $row['id'];
      $chkbox_id = 'chkbox_' . $id;

      $str = "<tr>" . "<td>". $row['firstname'] ."</td><td>". $row['phone'] ."</td><td>"  . $row['email'] . "</td><td>". $row['country'] ."</td>";
      $tmp = "<td> <a href='img1' target='_blank'>Image1</a> <a href='img2' target='_blank'>Image2</a> <a href='img3' target='_blank'>Image3</a> </td>"  ;
      $chk =   "<td>  <input type='checkbox' class='checkbox' name='selected' value='selected' id='chkbox'> Selected </td>" ."</tr>" ;
      $chk =  str_replace('chkbox',$chkbox_id,$chk);
        //  <br>
        $contfol  = $row['imagepath'];
        $dir = "../carnival/";
        // carnivalparticipants/";
        //$dir = "http://carnivalguideintl.com/carnivalparticipants/";
        $imgsarr= scandir($dir . $contfol);
       
        //$filesarr=array();
        // var_dump($imgsarr);	
        $i=0;	
        foreach($imgsarr as $img)
        {
            if(strlen($img)>2)
           {

            //$path= $dir . $contfol.'/'.$img;
             // $path= "../carnivalparticipants/" . $contfol.'/'.$img;

            $path= "../" . $contfol.'/'.$img;
            if($i==0)
             {
                 // $filesarr[] = $img ;
                $tmp = str_replace('img1',$path,$tmp);
             } 
             elseif($i==1)
             {
                $tmp = str_replace('img2',$path,$tmp);
             }
             elseif($i==2)
             {
                $tmp = str_replace('img3',$path,$tmp);
             }
            $i++;                            
           }                         
        }
  
      echo $str.$tmp.$chk;
    }
    
    mysql_free_result($result);
} 
?>

</table>

</body>
</html>
