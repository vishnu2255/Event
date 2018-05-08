@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-sm-6"></div>
</div>
<br>


<body style="background-image:  url('../storage/banners/main.jpg');background-repeat: no-repeat;">
    
<div class="container" style="margin-top: 10px;">

<div class="row" style="margin-top: 200px">

<div class="col-md-6">
<b></b>
</div>
<div class="col-md-5" style="margin-left: 90px ;background-image:  url('../storage/banners/white.png'); background-repeat: repeat">
        <form action="" method="post"> 
        
                <div class="row">
            <h1>
                Welcome to I Heart Takeout!  
            </h1>		
                </div>
            
                <div class="row ">
            <p class="m-2">
            <em>
            It's time to earn some extra cash with your amazing cooking skills. Regester today for early access to the new app that puts money in home cooks pockets.	
            </em>
            </p>		
                </div>
            
            <div class="row">
<input style="margin-left: 200px" type="button" class="btn btn-warning btn-lg btn-block " name="redirect" value="Signup" onclick="test()">
<div style="margin-left: 90px ; background-image:  url('../Images/white.png');background-repeat: repeat;">

</div>

            </div>
            <br>
            <br>
            <div class="row">

<div class="col-md-4">
        
    </div>
<div class="col-md-6">
       
    <div style="height: auto; width: 100px">
            <b style="margin: 10px">Powered by </b> 
            <img   src="../Images/coke.png" style=" width: 100%" alt="">
    </div>
   
    </div>
                         
            </div>
           
            </form>
    </div>

</div>

    
</div>

</body>
@endsection