@extends('layouts.unregisteredMaster')

@section('title')
	Contact Us
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
   <h2 style="color:white">Contact Us</h2>
@endsection

@section('content')
<?php 
  $nono = "asdfsadf";
  if(Auth::check()){
    $userinfo = Auth::user();
    $email = $userinfo->email;
    $name = $userinfo->firstName . " " . $userinfo->lastName;
  } else {
    $email = "";
    $name = "";
  }
?>
<div class="container-fluid">
  <br>
  <!--Displays message if enquiry or feedback was successful sent-->
  @if(Session::has('success'))
    <div class="alert alert-success alert-dismissable fade in"  style="background-color:#D5E1EE;border:none;border-radius:25px">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
      <h2 style="text-align:center">{{ Session::get('success') }}</h2>
    </div>
  @endif
  
  <!--START OF CONTACT US ENQUIRY-->
  <div class="row enquiry_area">
    <br><br><!--LEFT SIDE OF SCREEN-->
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
            Tel: (07) 3735 3660 <br><br>
            <a href="mailto:sip.cjcnscr@gmail.com" target="_top" class="contactEmail">sip.cjcnscr@gmail.com</a> <br><br>
            
            Please submit your enquiries in the form below
            <form action="{{ action('UserController@UserEnquiries') }}" method="POST">
              <input type="text" id="contactName" name="contactName" placeholder="Name*" width="200px" value="{{ $name }}" required>
              <br>
              <input type="text" id="contactEmail" name="contactEmail" placeholder="Email*" value="{{ $email }}" required>
              <br>
              <div class="country subject2" name="contactSubject" style="width:100%;height:45px;color:black;background-color:white;border:1px #666666 solid;padding: 5px 20px">
                <select name="contactSubject">
                  <option>Select subject*</option>
                  <option value="Enquiries: General">General Enquiries</option>
                  <option value="Enquiries: Modules">Modules</option>
                  <option value="Enquiries: Quizzes">Quizzes</option>
                  <option value="Enquiries: Website Errors">Website Errors</option>
                  <option value="Enquiries: Other">Other</option>
                </select>
              </div>
              <textarea id="comment" name="contactComment" placeholder="How can we help you?"></textarea>
              <br>
              <button class="button darkgrey" type="submit" style="float:right">Send</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--END OF CONTACT US ENQUIRY-->
  <br>  
  <!--START OF FEEDBACK SECTION-->
  <div class="row feedback basicFontStyle">
    <br><h2>Feedback</h2><br>
    <p>How are we doing? Leave feedback on your experience, (all feedback will be read, but we may not always respond).</p>
    <br>
    <div>
      <form action="{{ action('UserController@UserFeedback') }}" method="POST">
          <input type="text" id="feedbackName" name="feedbackName" placeholder="Name" width="200px" value="{{ $name }}" required>
          <br>
          <input type="text" id="feedbackEmail" name="feedbackEmail" placeholder="Email" value="{{ $email }}" required>
          <br>
          <input type="text" id="feedbackSubject" name="feedbackSubject" placeholder="Subject">
          <textarea id="feedback" name="feedback" placeholder="What is your feedback?" height="1000px"></textarea>  
          <div class="stars">
                <input class="star star-5" id="star-5" type="radio" name="star" value="5"/>
                <label class="star star-5" for="star-5"></label>
                <input class="star star-4" id="star-4" type="radio" name="star" value="4"/>
                <label class="star star-4" for="star-4"></label>
                <input class="star star-3" id="star-3" type="radio" name="star" value="3"/>
                <label class="star star-3" for="star-3"></label>
                <input class="star star-2" id="star-2" type="radio" name="star" value="2"/>
                <label class="star star-2" for="star-2"></label>
                <input class="star star-1" id="star-1" type="radio" name="star" value="1"/>
                <label class="star star-1" for="star-1"></label>
                <h3 style="text-align: center">Leave a rating!</h3>
          </div>
          <div style="text-align:center">
            <br>
            <button class="button darkgrey" type="submit">Send</button>
          </div>
      </form>  
    </div>
  </div>
  <!--END OF FEEDBACK SECTION-->
</div>

@endsection
