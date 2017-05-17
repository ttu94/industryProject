@extends('layouts.unregisteredMaster')

@section('title')
	Contact Us
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
   <h2>Contact Us</h2>
@endsection

@section('content')
<div class="container-fluid">
  <br>
  <div class="row">
  <!--LEFT SIDE OF SCREEN-->
  <div class="col-md-6">
      <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3537.4015585955476!2d153.06056591092639!3d-27.55004541144087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x16a2c299555e1370!2sGriffith+Institute+for+Drug+Discovery+(GRIDD)!5e0!3m2!1sen!2sau!4v1493115715649" frameborder="0" style="border-color:black" allowfullscreen></iframe>
  </div>
    
  <!--RIGHT SIDE OF SCREEN-->
  <div class="col-md-6">
    <div class="blocks">
      <h3>Our Location</h3>
      <div class="basicFontStyle" style="text-align: justify">
          Building N75, Brisbane Innovation Park, <br>
          Nathan Campus, Griffith University <br><br>
          Tel: +61 123 456 789 <br>
          Fax: +61 123 456 789 <br><br>
          info@amarelo.com <br><br>
          <form action="/action_page.php">
            <input type="text" id="contactName" name="contactName" placeholder="Name" width="200px" required>
            <br>
            <input type="text" id="contactEmail" name="contactEmail" placeholder="Email" required>
            <br>
            <input type="text" id="contactSubject" name="contactSubject" placeholder="Subject">
            <br>
            <textarea id="comment" name="contactComment" placeholder="How can we help you?"></textarea>
            <br>
            <button class="button greenbluemedium" type="submit, button" style="float:right"form="contactUsForm" value="Submit" data-toggle="modal" data-target="#myModal">Send</button>
        </form>
  <!-- Modal for contactUs -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
          <h4 class="modal-title" style="text-align:center">Thank You!</h4>
        </div>
        <div class="modal-body">
          <p style="text-align:center">Thank you for your enquiry.<br>
              We'll be sure to email you soon!<br>
              Have a nice day!
          </p>
        </div>
        <div class="modal-footer" style="text-align:center">
          <button type="button" class="button2 greenbluemedium" style="width: 100px" data-dismiss="modal">Ok</button>
        </div>
      </div>
    </div>
  </div>
      </div>
    </div>
  </div>
  </div>
    
    <!--FEEDBACK SECTION-->
    <div class="feedback basicFontStyle">
      <br>
      <h2>Feedback</h2>
      <br>
      <p>How are we doing? Leave feedback on your experience, (all feedback will be read, but we may not always respond).</p>
      <br>
      <div>
          <form>
              <input type="text" id="feedbackName" name="feedbackName" placeholder="Name" width="200px" required>
              <br>
    
              <input type="text" id="feedbackEmail" name="feedbackEmail" placeholder="Email" required>
              <br>
    
              <input type="text" id="feedbackSubject" name="feedbackSubject" placeholder="Subject">
              <br>
              
              <textarea id="feedback" name="feedback" placeholder="What is your feedback?" height="1000px"></textarea>  
              <div class="stars">
                  <form action="">
                    <input class="star star-5" id="star-5" type="radio" name="star"/>
                    <label class="star star-5" for="star-5"></label>
                    <input class="star star-4" id="star-4" type="radio" name="star"/>
                    <label class="star star-4" for="star-4"></label>
                    <input class="star star-3" id="star-3" type="radio" name="star"/>
                    <label class="star star-3" for="star-3"></label>
                    <input class="star star-2" id="star-2" type="radio" name="star"/>
                    <label class="star star-2" for="star-2"></label>
                    <input class="star star-1" id="star-1" type="radio" name="star"/>
                    <label class="star star-1" for="star-1"></label>
                  </form>
                  <h3 style="text-align: center">Leave a rating!</h3>
              </div>
              <!--<p style= "text-align: center">Leave a rating!</p>-->
              <div style="text-align:center">
                <br>
              <button class="button greenbluemedium" type="submit, button" form="contactUsForm" value="Submit" data-toggle="modal" data-target="#feedbackModal">Send</button>
              </div>
              <br>
        </form>  
          
          <!--MODAL FOR FEEDBACK-->
            <div class="modal fade" id="feedbackModal" role="dialog">
              <div class="modal-dialog modal-sm">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" style="text-align: center">Thank You!</h4>
                  </div>
                  <div class="modal-body">
                    <p style="text-align:center">Thank you for leaving your feedback! <br>
                       It will be put into our consideration. <br>
                    </p>
                  </div>
                  <div class="modal-footer" style="text-align: center">
                    <button type="button" class="button2 greenbluemedium" style="width: 100px" data-dismiss="modal">Ok</button>
                  </div>
                </div>
              </div>
          </div>  <!-- Model  ends -->  
    </div>

</div>
</div>

@endsection
