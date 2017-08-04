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
                <div class="col-md-1"><br></div>
                <div class="alert alert-warning col-md-10" style="background-color: #F3D6D9; border: none;border-radius:25px">
                    <p class="basicFontStyle" style="text-align:center">You are viewing limited content. Please click on the <a href={{ route("education_modules", array("id" => Auth::user()->id)) }} style="color: #195DA3"><u>Educational Modules</u></a> link for the full content.</p>
                </div>
            @else
                <div class="col-md-1"><br></div>
                <div class="alert alert-warning col-md-10" style="background-color: #F3D6D9; border: none">
                    <p class="basicFontStyle" style="text-align:center">You are viewing limited content. For full access, please <a href="login" style="color: #195DA3"><u>Sign In</u></a> or <a href="register" style="color: #195DA3"><u>Register for an account</u></a>.</p>
                </div>
            @endif
            <div class="faq_container">
                <!--ABSTRACT MODULE 0-->
               <div class="faq">
                  <div class="faq_question"><h3><strong>Introduction: </strong>SCI Through The Ages</h3></div>
                    <div class="faq_answer_container">
                      <div class="faq_answer">
                            <br>
                            <ul class="carousels my-carousels" style="height:800px">
                                <input type="radio" id="1" name="activator" checked="checked" class="carousels__activator"/>
                                <input type="radio" id="2" name="activator" class="carousels__activator"/>
                                <input type="radio" id="3" name="activator" class="carousels__activator"/>
                                <input type="radio" id="4" name="activator" class="carousels__activator"/>
                                <input type="radio" id="5" name="activator" class="carousels__activator"/>
                                
                                <div class="carousels__controls">
                                  <label for="2" class="carousels__control carousels__control--backward"></label>
                                  <label for="5" class="carousels__control carousels__control--forward"></label>
                                </div>
                                <div class="carousels__controls">
                                  <label for="3" class="carousels__control carousels__control--backward"></label>
                                  <label for="1" class="carousels__control carousels__control--forward"></label>
                                </div>
                                <div class="carousels__controls">
                                  <label for="4" class="carousels__control carousels__control--backward"></label>
                                  <label for="2" class="carousels__control carousels__control--forward"></label>
                                </div>
                                <div class="carousels__controls">
                                  <label for="5" class="carousels__control carousels__control--backward"></label>
                                  <label for="3" class="carousels__control carousels__control--forward"></label>
                                </div>
                                <div class="carousels__controls">
                                  <label for="1" class="carousels__control carousels__control--backward"></label>
                                  <label for="4" class="carousels__control carousels__control--forward"></label>
                                </div>
                              
                                <!--SLIDE 1-->
                                <li class="carousels__slide">
                                  <p class="modh2">From the Tombs of the Pharaohs<br><br></p>
                                 <menu class="words2">
                                   <li>Properly recorded accounts of Spinal cord injury and its treatment are discovered from ancient times, when the medical science had barely begun its existence.</li>
                                   <li>An Egyptian papyrus roll manuscript from 1700 B.C. was discovered that describes two spinal cord injuries involving fracture or dislocation of the neck vertebrae accompanied by paralysis. This is the earliest record of SCI ever to have been found.</li>
                                   <li>The rolls described the injury as "an ailment not to be treated."</li>
                                 </menu>
                                </li>
                                
                                <!--SLIDE 2-->
                                <li class="carousels__slide">
                                      <p class="modh2">The Golden Age of Greece<br><br></p>
                                      <menu class="words2">
                                        <li>According to historical findings, the concept of the treatment had grown a little in Greece a few centuries later.</li>
                                        <li>Hippocrates of Kos (460-377 B.C.) was a renowned Greek physician who is often referred to as the “Father of Modern Medicine”.</li>
                                        <li>According to him, no treatment options were available for spinal cord injuries with paralysis. And that those patients were destined to die.</li>
                                        <li>However, he did use primitive form of traction therapy for SCI without paralysis. For this he invented two devices:</li>    
                                        <ul>
                                            <li>- The Hippocratic Ladder: he used this to tie the patients to its rungs and hang them upside-down and let the gravity provide traction.</li>
                                            <li>- The Hippocratic Board: he used this device to immobilize the patients and apply traction using their hands or feet.</li>
                                        </ul>
                                      </menu>
                                </li>
                                
                                <!--SLIDE 3-->
                                <li class="carousels__slide words2">
                                    <menu class="words2">
                                      <li>Galen of Pergamon (129-200 A.D.), another Greek physician, first stipulated the concept of a ‘central nervous system’ by suggesting that spinal cord was an extension of the brain and was responsible for carrying sensations between brain and the limbs.</li>
                                      <li>Paulus Aegineta (625-690 A.D.) endorsed surgical intervention for SCI to remove the bone fragments as he believed that the fragments were responsible for paralysis.</li>
                                      <li>Records also reflect that Hindu, Arab, and Chinese physicians developed some simplistic forms of traction to treat vertebral conditions. The same principles of traction are still in practice today.</li>
                                    </menu>
        
                                </li>
                                
                                <!--SLIDE 4-->
                                <li class="carousels__slide words2">
                                    <p class="modh2">Through the Dark Ages<br><br></p>
                                    <menu class="words2">
                                      <li>Leonardo Da Vinci (1452-1519 AD) has been credited to be the first person to ever correctly portray the human spine with all of its salient features.</li>
                                      <li>The earliest records of a publication of spinal cord anatomy for educational and academic purposes are found in the anatomy textbook from 1543, written by Andreas Vesalius - a Renaissance physician and teacher(1514-1564 A.D.). He is often referred to as “Father of Modern Human Anatomy”.</li>
                                      <li>Based on his experience and dissection of spine, he had described and illustrated the spine’s anatomy in complete detail. This enabled the physicians of that era to understand the correct structure of the spine and by extension, the nature of the damage caused by any spinal injury.</li>
                                      <li>The names of the spinal regions that are used today- cervical, thoracic, lumbar, sacral, and coccygeal – were originally given by Vesalius.</li>
                                    </menu>
                                </li>
                                
                                <!--SLIDE 5-->
                                <li class="carousels__slide">
                                  <p class="modh2">The Modern Times<br><br>
                                  <menu class="words2">
                                    <li>The late 19th century brought widespread use of antiseptics and sterilization into surgical procedures. This enabled the surgeons to perform spinal surgeries without significant risk of infection.</li>
                                    <li>The early 20th century equipped the medical practitioners with the X-rays. Now the surgeons had a way to image the spine and get a more accurate idea of the injury to give a more precise diagnosis and prognosis.</li>
                                    <li>Both of these advancements in the medical field made the spinal surgery more desirable and relatively easier. Hence by the middle of the twentieth century, we had a standard treatment modality established for SCI: repositioning the spine, fixing it in place, and rehabilitation.</li>    
                                    <li>In the 1990s, it was found that the use of steroids (methylprednisolone) had a potential to reduce the inflammation and therefore, further damage to the injured nerve cells, which became a very significant alternative or additional treatment option.</li> 
                                    <li>But the quest for an effective cure for spinal cord injury still continues…</li> 
                                  </menu>
                                </li>
                                
                                <div class="carousels__indicators">
                                  <label for="1" class="carousels__indicator"></label>
                                  <label for="2" class="carousels__indicator"></label>
                                  <label for="3" class="carousels__indicator"></label>
                                  <label for="4" class="carousels__indicator"></label>
                                  <label for="5" class="carousels__indicator"></label>
                                </div>
                          </ul>
                          <br>
                          <p style="text-align:center;font-size:20px"><strong>Please Note:</strong> You will not be tested on the content in this Introductory content.</p><br>
                          @if (Auth::check())
                              <p style="text-align:center;font-size:20px">You are currently viewing limited content, for full access please click the button below!</p><br>
                              <a href={{ route("education_modules", array("id" => Auth::user()->id)) }}><button class="btns3 darkgrey">Educational Modules</button></a>
                          @else
                              <p style="text-align:center;font-size:20px">If you would like to read more please register by clicking the button below!</p><br>
                              <a href="register"><button class="btns3 darkgrey">Register</button></a>
                          @endif
                          <br>
                      </div>
                    </div> 
                    
                </div>
               <br>
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
