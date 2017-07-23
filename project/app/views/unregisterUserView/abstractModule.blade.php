@extends('layouts.unregisteredMaster')

@section('title')
	Educational Module Abstracts
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
   <h2 style="color:white">Educational Module Abstracts</h2>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <br>
            @if (Auth::check())
                <div class="alert alert-warning" style="background-color: #F3D6D9; border: none">
                    <p class="basicFontStyle" style="text-align:center">You are viewing limited content. Please click on the <a href={{ route("education_modules", array("id" => Auth::user()->id)) }} style="color: #195DA3"><u>Educational Modules</u></a> link for the full content.</p>
                </div>
            @else
                <div class="alert alert-warning" style="background-color: #F3D6D9; border: none">
                    <p class="basicFontStyle" style="text-align:center">You are viewing limited content. For full access, please <a href="login" style="color: #195DA3"><u>Sign In</u></a> or <a href="register" style="color: #195DA3"><u>Register for an account</u></a>.</p>
                </div>
            @endif
            <div class="faq_container">
                <!--ABSTRACT MODULE 1-->
               <div class="faq">
                  <div class="faq_question"><h3><strong>Module 1: </strong>Facts and Figures for SCI</h3></div>
                   <div class="faq_answer_container">
                      <div class="faq_answer" style="text-align: justify;">
                          <br>
                          <div style="text-align: center">
                              <strong>You Are Not Alone</strong>
                          </div>
                          <br>
                          280,000-560,000 new cases are recorded every year across the world.
                          <br><br>
                          The victims of spinal cord injury have a 2 to 5 times the normal mortality rate which is maximum during the first year following the injury. 
                          Age distribution shows males between the ages of 20 to 29 years and ages above 70 years to be at the highest risk. 
                          <br><br>
                          Females are observed to be most vulnerable to spinal cord injury between the ages of 15 and 30 years and at ages above 60 years. 
                          <br><br>
                          Males are at least twice as likely to be the victims of spinal cord injury as compared to females.
                          <br>
                          <br>
                          <div>
                              <a href={{route("module_one")}}><button class="btns3 darkgrey">See full content</button></a>
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
                      <div class="faq_answer">
                          <br>
                          This module will be covered in two sections, organization of CNS & PNS and the body’s response to an injured nerve and injured spinal cord.
                          <br><br>
                          To understand the spinal cord injury, we need to understand the structure and function of the cord properly. To do that, we must first understand the organization of the central and peripheral nervous systems.
                          <br><br>
                          Body’s response to an injured nerve and injured spinal cord can be seperated into 3 categories Injury to the nervous system, Injury to a peripheral nerve and Injury to spinal cord.
                          <br>
                          <br>
                          <div>
                              <a href={{route("module_two")}}><button class="btns3 darkgrey">See full content</button></a>
                          </div>
                          <br>
                      </div>
                    </div> 
                </div>
               <br>
               <!--ABSTRACT MODULE 3-->
               <div class="faq">
                    <div class="faq_question"><h3><strong>Module 3: </strong>Structure</h3></div>
                    <div class="faq_answer_container">
                      <div class="faq_answer">
                          <br>
                          The spinal cord consist of 5 sections, cervical vertebrae, thoracic vertebrae, lumbar vertebrae, single sacrum and single coccyx.
                          <br><br>
                          There are a total of 33 vertebral or the backbone which are stacked like arrangement small bony blocks known as the vertebrae. 
                          <br><br>
                          Every individual vertebra is separated from the next vertebra by a soft cushion like disc of cartilage called an intervertebral disc. 
                          <br><br>
                          Spinal nerves come out of the spinal column from these gaps between the vertebrae.
                          <br>
                          <br>
                          <div>
                              <a href={{route("module_three")}}><button class="btns3 darkgrey">See full content</button></a>
                          </div>
                          <br>
                      </div>
                    </div>        
                </div>
                <br>
                <!--ABSTRACT MODULE 4-->
               <div class="faq">
                  <div class="faq_question"><h3><strong>Module 4: </strong>Functions</h3></div>
                    <div class="faq_answer_container">
                      <div class="faq_answer">
                          <br>
                          Module 4 will be covering the functionality of the vertebral column, spinal cord and spinal nerves and dermatome.
                          <br><br>
                          The vertebral column, more commonly known as the backbone, serves some very crucial functions. First and foremost, it covers, contains and protects the spinal cord.
                          <br><br>
                          The spinal cord mainly functions as a conduit between brain and the rest of body.
                          It carries all the sensory information from the body and relays it to brain; and carries motor commands from the brain and relays them to the body.
                          <br><br>
                          As mentioned before, each spinal nerve supplies a specific region of the body. These regions are called dermatomes. Other than the dermatomes, the spinal nerves supply specific muscle groups and organs.
                          <br>
                          <br>
                          <div>
                              <a href={{route("module_four")}}><button class="btns3 darkgrey">See full content</button></a>
                          </div>
                          <br>
                      </div>
                    </div>        
                </div>
                <br>
                <!--ABSTRACT MODULE 5-->
               <div class="faq">
                  <div class="faq_question"><h3><strong>Module 5: </strong>SCI mechanisms</h3></div>
                       <div class="faq_answer_container">
                          <div class="faq_answer">
                              <br>
                              Physicians use a three column model of the spinal column in order to describe and explain the spinal column injuries:
                              <menu>
                                  <li>Anterior column - the anterior longitudinal ligament and the anterior one-half of the vertebral body,</li>
                                  <li>Middle column - the posterior one-half of the vertebral body</li>
                                  <li>Posterior column - laminae and the spinal canal.</li>
                              </menu>
                              <br>
                              <br>
                              <div>
                                  <a href={{route("module_five")}}><button class="btns3 darkgrey">See full content</button></a>
                              </div>
                              <br>
                          </div>
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
</div>

@endsection
