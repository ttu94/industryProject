@extends('layouts.unregisteredMaster')

@section('title')
	FAQ
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
   <h2 style="color:white">Frequently Asked Questions</h2>
@endsection

@section('content')
<div class="container-fluid">
    @if($errors->any())
        <div class="alert alert-danger alert-dismissable fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            {{ implode('',$errors->all('<h2 class="error" style="text-align:center">:message</h2>')) }}
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <br>
            <h3 class="faq_title">General</h3>
            <div class="faq_container">
                <div class="faq">
                  <div class="faq_question"><h3>I have forgotten my password, what should I do?</h3></div>
                       <div class="faq_answer_container">
                          <div class="faq_answer"><br>You should reset your <strong>password</strong> via the <a href="forgottenPassword" style="color: #195DA3"><u>Forget Password</u></a>
                          link on the <a href="login" style="color: #195DA3"><u>Login</u></a> page.
                          <br>&nbsp;</div>
                       </div>        
                </div>
                <br>
                <div class="faq">
                  <div class="faq_question"><h3>How do I change my password?</h3></div>
                       <div class="faq_answer_container">
                          <div class="faq_answer"><br>You have to be logged into your account to change your current <strong>password</strong>. 
                          <br>Click on <a style="color: #195DA3"><u>Account Details</u></a>, then the "Change Password" button.
                          <br><br>Alternatively, if you can't log into your account to do this, refer to the question above. 
                          <br>&nbsp;</div>
                       </div>        
                </div>
                <br>
                <div class="faq">
                  <div class="faq_question"><h3>Who can participate in the modules and quizzes?</h3></div>
                       <div class="faq_answer_container">
                          <div class="faq_answer"><br>The full modules and quizzes are available to registered users only, however it is free to register for an account. 
                          <br><br>Abstracts of each module are available to the general public.<br>&nbsp;</div>
                       </div>        
                </div>
                <br>
                <div class="faq">
                  <div class="faq_question"><h3>I can't find my question here or want to make an enquiry about an issue that is not listed, what should I do?</h3></div>
                       <div class="faq_answer_container">
                          <div class="faq_answer"><br>Click on the <a href="contactUs" style="color: #195DA3"><u>Contact</u></a> link, which will take you to the "Contact Us" page. 
                          You can fill in the form with your details and enquiry, and we will get back to you as soon as possible.
                          <br><br>While you are on that page, why not leave us some feedback! It would be greatly appreciated and help improve this resource.
                          <br>&nbsp;
                          </div>
                       </div>        
                </div>
                <br>
                <div class="faq">
                  <div class="faq_question"><h3>I have deactivated my account, how do I reactivate?</h3></div>
                       <div class="faq_answer_container">
                          <div class="faq_answer"><br> It's easy! To reactivate please <a href="login" style="color: #195DA3"><u>Login</u></a> normally and follow the prompts on screen.
                          <br>&nbsp;</div>
                       </div>        
                </div>
                <br>
                <h3 class="faq_title">Modules</h3> 
                <div class="faq">
                  <div class="faq_question"><h3>Can I download the educational module content?</h3></div>
                       <div class="faq_answer_container">
                          <div class="faq_answer"><br>Yes, in each module page there is a "Download PDF" button where you may download or print a PDF version of the respective module content.<br>&nbsp;</div>
                       </div>        
                </div>
                <br>
                <div class="faq">
                  <div class="faq_question"><h3>Is there a time-frame in which I must finish the modules?</h3></div>
                       <div class="faq_answer_container">
                          <div class="faq_answer"><br>Yes, users have 12 months to study the modules and complete each quiz.<br>&nbsp;</div>
                       </div>        
                </div>
                <br>
                <div class="faq">
                  <div class="faq_question"><h3>How long will it take to finish a module?</h3></div>
                       <div class="faq_answer_container">
                          <div class="faq_answer"><br>Time. Give it time.<br>&nbsp;</div>
                       </div>        
                </div>
                <br>
                <h3 class="faq_title">Quizzes</h3>
                <div class="faq">
                  <div class="faq_question"><h3>How many attempts do I have to complete a quiz?</h3></div>
                       <div class="faq_answer_container">
                          <div class="faq_answer"><br>You can complete the quizzes as many times as you like. There are no restrictions for the number of attempts <br>&nbsp;</div>
                       </div>        
                </div>
                <br>
                <div class="faq">
                  <div class="faq_question"><h3>How long will it take to finish a quiz?</h3></div>
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
