@extends('layouts.unregisteredMaster')

@section('title')
	Educational Module Abstracts
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
   <h2>Educational Module Abstracts</h2>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
       
        <div class="col-md-12">
            <br>
                @if (Auth::check())
                    <div class="alert alert-warning" style="background-color: #FBF1DB; border: none">
                        <p class="basicFontStyle" style="text-align:center">You are viewing limited content. Please click on the "<a href={{ route("education_modules", array("id" => Auth::user()->id)) }} style="color: #88ABA5">Educational Module</a>" link for the full content.</p>
                    </div>
                @else
                    <div class="alert alert-warning" style="background-color: #FBF1DB; border: none">
                        <p class="basicFontStyle" style="text-align:center">You are viewing limited content. For full access, please <a href="login" style="color: #88ABA5">Sign In</a> or <a href="register" style="color: #88ABA5">Register for an account</a>.</p>
                    </div>
                @endif
            <div class="faq_container">
                <!--ABSTRACT MODULE 1-->
               <div class="faq">
                  <div class="faq_question"><h3><strong>Module 1: </strong>Demographics & Economics of Spinal Cord Injury</h3></div>
                       <div class="faq_answer_container">
                          <div class="faq_answer" style="text-align: justify;">
                              <br>
                              According to WHO data, the global incidence rate of spinal cord injuries is 40-80 cases per million population annually. 
                              Which means there are 280,000-560,000 new cases of spinal cord injury recorded every year worldwide. 
                              <br><br>
                              Males are at least twice as likely to be the victims of spinal cord injury as compared to females.
                              <br><br>
                              The victims of spinal cord injury have a 2 to 5 times the normal mortality rate which is maximum during the first year following the injury. 
                              Age distribution shows males between the ages of 20 to 29 years and ages above 70 years to be at the highest risk. 
                              <br><br>
                              Females are observed to be most vulnerable to spinal cord injury between the ages of 15 and 30 years and at ages above 60 years. 
                              <br><br>
                              The World Health Organization reports that more than 90% of the recorded cases are traumatic in origin.
                              <br>
                              <br>
                              <div>
                                  <a href={{route("module_one")}}><button class="btns3 greenbluemedium2">See full content</button></a>
                              </div>
                              <br>
                          </div>
                       </div> 
               </div>
                <br>
                <!--ABSTRACT MODULE 2-->
               <div class="faq">
                  <div class="faq_question"><h3><strong>Module 2: </strong>Spinal cord as a neutral tissue and injury to the nerves</h3></div>
                       <div class="faq_answer_container">
                          <div class="faq_answer"><br>This content is still unavailable. Our team is working hard to have it ready for you.<br>&nbsp;</div>
                       </div> 
                </div>
               <br>
               <!--ABSTRACT MODULE 3-->
               <div class="faq">
                  <div class="faq_question"><h3><strong>Module 3: </strong>Structures</h3></div>
                       <div class="faq_answer_container">
                          <div class="faq_answer"><br>This content is still unavailable. Our team is working hard to have it ready for you.<br>&nbsp;</div>
                       </div>        
                </div>
                <br>
                <!--ABSTRACT MODULE 4-->
               <div class="faq">
                  <div class="faq_question"><h3><strong>Module 4: </strong>Functions</h3></div>
                       <div class="faq_answer_container">
                          <div class="faq_answer"><br>This content is still unavailable. Our team is working hard to have it ready for you.<br>&nbsp;</div>
                       </div>        
                </div>
                <br>
                <!--ABSTRACT MODULE 5-->
               <div class="faq">
                  <div class="faq_question"><h3><strong>Module 5: </strong>SCI mechanisms</h3></div>
                       <div class="faq_answer_container">
                          <div class="faq_answer"><br>This content is still unavailable. Our team is working hard to have it ready for you.<br>&nbsp;</div>
                       </div>        
                </div>
                <br>
                <!--ABSTRACT MODULE 6-->
               <div class="faq">
                  <div class="faq_question"><h3><strong>Module 6: </strong>Types of injuries</h3></div>
                       <div class="faq_answer_container">
                          <div class="faq_answer"><br>This content is still unavailable. Our team is working hard to have it ready for you.<br>&nbsp;</div>
                       </div>        
                </div>
                <br>
                <!--ABSTRACT MODULE 7-->
               <div class="faq">
                  <div class="faq_question"><h3><strong>Module 7: </strong>Different injuries and their effects on the cord and body</h3></div>
                       <div class="faq_answer_container">
                          <div class="faq_answer"><br>It will depend on how long you take on each question. There is no time limit, so go at your own pace.<br>&nbsp;</div>
                       </div>        
                </div>
                <br>
                <!--ABSTRACT MODULE 8 -->
                <div class="faq">
                  <div class="faq_question"><h3><strong>Module 8: </strong>Chromic effects of spinal cord injury</h3></div>
                       <div class="faq_answer_container">
                          <div class="faq_answer"><br>This content is still unavailable. Our team is working hard to have it ready for you.<br>&nbsp;</div>
                       </div>        
                </div>
                <br>
                <!--ABSTRACT MODULE 9 -->
                <div class="faq">
                  <div class="faq_question"><h3><strong>Module 9: </strong>Peripheral nerve regeneration</h3></div>
                       <div class="faq_answer_container">
                          <div class="faq_answer"><br>This content is still unavailable. Our team is working hard to have it ready for you.<br>&nbsp;</div>
                       </div>        
                </div>
                
                <br>
                <!--ABSTRACT MODULE 10 -->
                <div class="faq">
                  <div class="faq_question"><h3><strong>Module 10: </strong>CNS regeneration</h3></div>
                       <div class="faq_answer_container">
                          <div class="faq_answer"><br>This content is still unavailable. Our team is working hard to have it ready for you.<br>&nbsp;</div>
                       </div>        
                </div>
             </div>
                <br>
                <!--ABSTRACT MODULE 11 -->
                <div class="faq">
                  <div class="faq_question"><h3><strong>Module 11: </strong>Repair therapeutic strategies</h3></div>
                       <div class="faq_answer_container">
                          <div class="faq_answer"><br>This content is still unavailable. Our team is working hard to have it ready for you.<br>&nbsp;</div>
                       </div>        
                </div>
                
        </div>
    </div>
</div>

@endsection
