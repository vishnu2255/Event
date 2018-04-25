@extends('carnivallayouts.app')

@section('content')

<div class=container>
  <div class="row"><br><br><br>
  
 <h1> 2018 Carnival Guide Intl. Cover Model Contest </h1>
 <hr/><br>
  <div class="col-md-6">
    <p>This is your chance to be The Carnival Guide Cover Model, and represent Carnival Guide Intl. at events, radio and television interviews and WIN a trip to Trinidad to experience their carnival.</p>
    <h2>The Process</h2>
    <p>Carnival Guide intl.&rsquo;s &nbsp;team will select the top 32 applicants from each country and launch an online vote competition which will last for 5 weeks. Each week for the first 4 weeks, 5 applicants will be eliminated; leaving us with the top 12. Each of the top 12 contestants will experience a professional photoshoot and be featured in the Carnival Guide Intl. 2019 calendar. &nbsp;The contestants with the most overall votes and points &nbsp;at the end of the 5th week will win and participate in a professional photo shoot designed specifically for the Carnival Guide Intl., and be featured on the cover of the guide&rsquo;s 2018 editions.</p>
    <h3>Schedule: Toronto, Barbados, St. Lucia &nbsp;</h3>
    <ul>
      <li>
        Application start date: March &nbsp;7, 2018
      </li>
      <li>
        Application end date: April 20, 2018
      </li>
    </ul>
    <h3>Schedule: Guyana<br /></h3>
    <strong><em>NOTE&rdquo; Guyana Carnival voting will &nbsp;ONLY be 2 weeks long </em></strong>
   <ul> <li>Application start date: March &nbsp;7, 2018</li>
      <li >Application end date: April 20, 2018</li>
    </ul>
    <h2  >How To Apply</strong></h2>
    <p  >Applications are accepted through application from, email or Instagram DM.</p>
    <p  >Email the items listed below to models@carnivalguideintl.com &nbsp;OR DM @Toronto_Carnival_Guide to enter.</strong></p>
    <ol>
      <li dir="ltr">
        <p  >1 headshot</p>
      </li>
      <li dir="ltr">
        <p  > 2 full body shots</p>
      </li>
      <li dir="ltr">
        <p>Social media handles (instagram and facebook)</p>
      </li>
      <li dir="ltr">
        <p  >1 short bio OR a link to a short video about why you should be the face of the 2018 guide. Get creative!</p>
      </li>
      <li dir="ltr">
        <p>Like our <a href="https://www.instagram.com/toronto_carnival_guide/?hl=en">Instagram</a> and <a href="https://www.facebook.com/Torontocarnivalguide">Facebook</a> pages</p>
      </li>
    </ol>
   
<br>
 <img src="/img/Cover_model_contest_2018.jpg" width="100%"><br><br>
  </div>
  <div class="col-md-6" style="background-color:#ff4256">
  <div class="formwrap">
  
  <h2 align="center" style="color:#FFF">Be the 2018 Cover Model!</h2>
  
  <hr/>
 <p>Complete the form below to be entered into the 2018 Cover model contest. This year we will be covering 2 new carnival locations; Guyana and Barbados. 
   <div class="row">
                    <form role="form" method="post" id="reused_form" enctype=&quot;multipart/form-data&quot; >
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
  <option value="Barbados" class="form-control input-lg" >Crop Over</option>
  <option value="Guyana" class="form-control input-lg" >Guyana Carnival</option>
   <option value="lucia" class="form-control input-lg" >St Lucia Carnival</option>
    
    </select>
  </div>
</div>    

                            <label for="name"> </label>
                            <textarea class="form-control" type="textarea" name="message" id="message" placeholder="Why should you be the 2018 Cover Model" maxlength="6000" rows="3"></textarea>
                            <br>
      <div class="alert alert-danger">
    *NOTE if images are larger than 2MB this form will not work. Email your submission to models@carnivalguideintl.com
          </div>                 

   <label for="name"> Head Shot:</label>
                            <input type="file" class="form-control input-lg" id="image" name="image" required>
                        

  
  <label for="name"> Full Body 2:</label>
                            <input type="file" class="form-control input-lg" id="image2" name="image2" required>
 
 
  <label for="name"> Full Body 1:</label>
                            <input type="file" class="form-control input-lg" id="image3" name="image3" required>

                      
<br>
                        <button type="submit" class="btn btn-success btn-lg btn-block" id="btnContactUs">Post It! &rarr;</button>
                    </form><br><br>
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Sent your message successfully!</h3> </div>
                    <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>              
            </div>
  </div>
  
  
  
  </div>
</div>


</div>

@endsection