@extends('layouts.unregisteredMaster')

@section('title')
	FAQ
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
   <h2>Frequently Asked Questions</h2>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
       
        <div class="col-md-12">
            <br>
            <h3 style="color:#595145">General</h3>
            <div class="faq_container">
                <div class="faq">
                  <div class="faq_question">I have forgotten my password, what should I do?</div>
                       <div class="faq_answer_container">
                          <div class="faq_answer"><br>You should reset your <strong>password</strong> via the <a href="forgottenPassword" style="color: #88ABA5"><u>Forget Password</u></a>
                          link on the <a href="login" style="color: #88ABA5"><u>Login</u></a> page.
                          
                          <br>&nbsp;</div>
                       </div>        
                </div>
                <br>
                <div class="faq">
                  <div class="faq_question">How do I change my password?</div>
                       <div class="faq_answer_container">
                          <div class="faq_answer"><br>You have to be logged into your account to change your current <strong>password</strong>. 
                          <br>Click on <a style="color: #88ABA5"><u>Account Details</u></a>, then the "Change Password" button.
                          <br><br>Alternatively, if you can't log into your account to do this, refer to the question above. 
                          <br>&nbsp;</div>
                       </div>        
                </div>
                <br>
                <div class="faq">
                  <div class="faq_question">Who can participate in the modules and quizzes?</div>
                       <div class="faq_answer_container">
                          <div class="faq_answer"><br>The full modules and quizzes are available to registered users only, however it is free to register for an account. 
                          <br><br>Abstracts of each module are available to the general public.<br>&nbsp;</div>
                       </div>        
                </div>
                <br>
                <div class="faq">
                  <div class="faq_question">I can't find my question here or want to make an enquiry about an issue that is not listed, what should I do?</div>
                       <div class="faq_answer_container">
                          <div class="faq_answer"><br>Click on the <a href="contactUs" style="color: #88ABA5"><u>Contact</u></a> link, which will take you to the "Contact Us" page. 
                          You can fill in the form with your details and enquiry, and we will get back to you as soon as possible.
                          <br><br>While you are on that page, why not leave us some feedback! It would be greatly appreciated and help improve this resource.
                          <br>&nbsp;
                          </div>
                       </div>        
                </div>
                <br>
                <h3 style="color:#595145">Modules</h3> 
                <div class="faq">
                  <div class="faq_question">Can I download the educational module content?</div>
                       <div class="faq_answer_container">
                          <div class="faq_answer"><br>Yes, in each module page there is a "Download PDF" button where you may download or print a PDF version of the respective module content.<br>&nbsp;</div>
                       </div>        
                </div>
                <br>
                <div class="faq">
                  <div class="faq_question">Is there a time-frame in which I must finish the modules?</div>
                       <div class="faq_answer_container">
                          <div class="faq_answer"><br>Yes, users have 12 months to study the modules and complete each quiz.<br>&nbsp;</div>
                       </div>        
                </div>
                <br>
                <div class="faq">
                  <div class="faq_question">How long will it take to finish a module?</div>
                       <div class="faq_answer_container">
                          <div class="faq_answer"><br>Time. Give it time.<br>&nbsp;</div>
                       </div>        
                </div>
                <br>
                <h3 style="color:#595145">Quizzes</h3>
                <div class="faq">
                  <div class="faq_question">How many attempts do I have to complete a quiz?</div>
                       <div class="faq_answer_container">
                          <div class="faq_answer"><br>You can complete the quizzes as many times as you like. There are no restrictions for the number of attempts <br>&nbsp;</div>
                       </div>        
                </div>
                <br>
                <div class="faq">
                  <div class="faq_question">How long will it take to finish a quiz?</div>
                       <div class="faq_answer_container">
                          <div class="faq_answer"><br>It will depend on how long you take on each question. There is no time limit, so go at your own pace.<br>&nbsp;</div>
                       </div>        
                </div>
                <br>
             </div>
        </div>
    </div>
    
    
</div>

@endsection
