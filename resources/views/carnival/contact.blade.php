@extends('carnivallayouts.app')

@section('content')

<div class="container">

<div class="row">
<br><br><br><br>
  
 <h1>Contact Us</h1>
 <hr/><br>
 
  <div class="col-md-6">
    <h3>We are always happy to hear your feedback. Have a question? Send us a message.
    <br><br><hr/>
    </h3>
 
    <div class="row">
  <div class="col-md-6"><strong>Carnival Guide Intl.</strong><br>
    1 866 807 4622<br>
Hello@carnivalguideintl.com</div>
  <div class="col-md-6"> </div>
</div>


  </div>
  <div class="col-md-6">
  
          <form role="form" method="post" id="reused_form" enctype=&quot;multipart/form-data&quot; >

  <label for="name"> Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required maxlength="50">
<br>
    <label for="phone"> Phone:</label>
                            <input type="text" class="form-control" id="phone" name="phone" required maxlength="50">
<br>
   <label for="email"> Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required maxlength="50">
    <br>
                            <label for="name"> Message:</label>
                            <textarea class="form-control" type="textarea" name="message" id="message" placeholder="Your Message Here" maxlength="6000" rows="7"></textarea>
           <br>
        

                        <button type="submit" class="btn btn-lg btn-success pull-right" id="btnContactUs">Post It! &rarr;</button>
                    </form>
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Sent your message successfully!</h3> </div>
                    <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
  
  <br><br><br>
  </div>
</div>

</div>

@endsection