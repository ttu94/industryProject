@extends('layouts.masterLogin')

@section('title')
    {{--Module names needs to be taken out of database--}}
    Module 1: Demographics and Economics of Spinal Cord Injury (SCI)
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
    <!--THIS ALSO NEEDS TO BE TAKEN FROM DB-->
   <h4>Module 1: Facts and Figures for SCI</h4>
@endsection


@section('content')
<div class="container-fluid"> 
    <br>
    
    <div class="col-md-7">
      <a href="{{ URL::to('/') }}/pdfs/Module1.pdf" 
      target="_blank" class="btn2 pdf">Download PDF</a>
    </div>
    <div class="col-md-5">
      <!--INCOMPLETE ROUTE, requires to take module ID-->
      <a href={{ route("module_quiz_info", array("id" => Auth::user()->id, "quizNo" => "Module 1")) }} ><button class="btn darkgrey2">Begin Quiz >></button></a>
    </div>
    <br><br><br>
    <div class="col-md-12" >
      <ul class="carousels my-carousels">
        <input type="radio" id="1" name="activator" checked="checked" class="carousels__activator"/>
        <input type="radio" id="2" name="activator" class="carousels__activator"/>
        <input type="radio" id="3" name="activator" class="carousels__activator"/>
        <input type="radio" id="4" name="activator" class="carousels__activator"/>
        <input type="radio" id="5" name="activator" class="carousels__activator"/>
        <input type="radio" id="6" name="activator" class="carousels__activator"/>
        <input type="radio" id="7" name="activator" class="carousels__activator"/>
        
        <div class="carousels__controls">
          <label for="2" class="carousels__control carousels__control--backward"></label>
          <label for="7" class="carousels__control carousels__control--forward"></label>
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
          <label for="6" class="carousels__control carousels__control--backward"></label>
          <label for="4" class="carousels__control carousels__control--forward"></label>
        </div>
        <div class="carousels__controls">
          <label for="7" class="carousels__control carousels__control--backward"></label>
          <label for="5" class="carousels__control carousels__control--forward"></label>
        </div>
        <div class="carousels__controls">
          <label for="1" class="carousels__control carousels__control--backward"></label>
          <label for="6" class="carousels__control carousels__control--forward"></label>
        </div>
      
        <!--SLIDE 1-->
        <li class="carousels__slide">
          <br>
          <p class="modh2">1 a) More demographics, less economics<br><br><u>You Are Not Alone</u><br><br></p>
         <menu class="words2">
           <li>280,000-560,000 new cases are recorded every year across the world.</li>
           <li>Number of men suffering from SCI is over twice the number of women.</li>
           <li>Men between the ages of 20 to 29 years and ages above 70 years appear to be at the highest risk.</li>
           <li>Women are observed to be at the highest risk between the ages of 15 to 30 years and at ages above 60 years.</li>
           <li>More than 90% of the recorded cases are a result of traumatic injury</li>
           <li>More than 12,000 people in Australia suffer from a spinal cord injury.</li>
         </menu>
        </li>
        
        <!--SLIDE 2-->
        <li class="carousels__slide">
          <menu class="words2">
            <li style="color: #B70014">The victims of spinal cord injury have a 2 to 5 times the normal mortality rate which is maximum during the first year following the injury.</li>
            <li>The lifetime cost is estimated to be AUD 5 million per case of paraplegia and AUD 9.5 million per case of quadriplegia.</li>
            <li>The economic burden of spinal cord injury on the Australian society was estimated at AUD 2 billion per annum in 2009 by Access Economics.</li>
          </menu>
          <br>
          <p class="modh2">Economics of SCI treatment and management</p>
          <img class="diagram3" src="{{ URL::to('/') }}/images/Module1/mod1img1.png"
          alt="The costs are estimated as per US health care standards and are reflected in US Dollars."
          width="750px" height="250px" style="text-align: center"></img>
          <br><p class="words2" style="text-align:center;text-decoration:underline">Table: The costs are estimated as per US health care standards and are reflected in US Dollars.</p>
        </li>
        
        <!--SLIDE 3-->
        <li class="carousels__slide words2">
          <br>
          <div><p class="modh2">Causes of Spinal Cord Injury</p><br></div>
          <div class="col-md-7 words2">
            <img class="diagram2" alt="National SCI Statistical Centre, US Fact Sheet 2016" 
            src="{{ URL::to('/') }}/images/Module1/mod1img2.png" height="450px"/><br>
            <p style="line-height:20px;text-align:center;text-decoration:underline;font-size:20px">Diagram: National SCI Statistical Centre, US Fact Sheet 2016</p>
          </div>
          <div class="col-md-5">
            <menu class="words2">
              <li>Trauma resulting from vehicular accidents, falls from heights, violence and sporting injuries cause over 90% of SCIs in total</li>
              <li>In rare cases, infection of the cord or a cancerous tumour can also cause a SCI.</li>
              <li>Problems related to blood vessels of the spinal cord may result in SCI as well.</li>
            </menu>
          </div>
        </li>
        
        <!--SLIDE 4-->
        <li class="carousels__slide words2">
          <div class="col-md-5">
            <br><br>
            <menu class="words2">
              <li>Over 58% people with SCI suffer from quadriplegia from which 45% of the people suffer from incomplete quadriplegia</li>
              <li>Only 1 in 250 cases of SCI may show full recovery without any long lasting paralysis.</li>
            </menu>
          </div>
          <div class="col-md-7 words2">
            <br>
            <img class="diagram2" alt="National SCI Statistical Centre, US Fact Sheet 2016" 
            src="{{ URL::to('/') }}/images//Module1/mod1img3.png" height="450px"/><br>
            <p style="line-height:20px;text-align:center;text-decoration:underline;font-size:20px">Diagram: National SCI Statistical Centre, US Fact Sheet 2016</p>
          </div>
        </li>
        
        <!--SLIDE 5-->
        <li class="carousels__slide">
          <br>
          <p class="modh2">1 b) Recovery of function<br><br>
          The Status Quo</p>
          <menu class="words2">
            <li>As of now, the recovery of function varies greatly with the extent of injury, the most severe cases show minimal to no recovery.</li>
            <li>The best possible outcomes are seen when the patients receive prompt medical assistance and treatment.</li>
            <li>Surgery is very important to remove the debris and take the pressure off of the injured cord to prevent further damage to the cord.</li>    
            <li>After the initial surgical treatment intensive physical therapy over an extended period tends to yield maximum functional recovery.</li> 
            <li>We already have many systems in place where assistive devices help the SCI patients stay mobile and active- as much as their condition allows</li> 
            <li>However, depression and substance abuse are significantly higher in people with SCI which usually leads to a poorer outcome.</li> 
          </menu>
        </li>
        
        <!--SLIDE 6-->
        <li class="carousels__slide">
          <br>
          <p class="modh2">There is Hope</p>
          <menu class="words2">
            <li>Clinicians and scientists are working relentlessly to overcome the current limitations of the functional recovery.</li>
            <li>A lot of different therapies are being explored to increase the functional gain after SCI, if not heal the injury completely.</li>
            <li>These include cell transplants, natural products, growth factors, robotics, brain-computer interface and many more (module 11).</li>
            <li>These therapies would target different aspects of SCI and help the people living with SCI either regain lost function by healing the injury or by providing mechanical support externally.</li>
          </menu>
        </li>
        
        <!--SLIDE 7-->
        <li class="carousels__slide">
          <br>
          <p class="modh2">1 c) How long does recovery take</p>
          <menu class="words2">
            <li>Recovering from a SCI is very long and slow process.</li>
            <li>Time and degree of recovery often depends greatly upon the commitment from the patient.</li>
            <li>The recovery within the first six months is relatively quicker than later.</li>
            <li>Any remaining loss of function after 1-2 years will likely become permanent.</li>
            <li>However, in some cases, with a positive outlook and hard work, patients have defied all odds and regained function even after 2 years.</li>
          </menu>
          <br><br><br><br>
          <p class="endmess text2"><i><strong>This is the end of Module 1: Facts and Figures for SCI.
            <br> You may wish to read over the module content again, or you can begin the multiple-choice quiz by clicking the 'Begin Quiz' button above.
            </strong></i>
          </p>
        </li>
        
        <div class="carousels__indicators">
          <label for="1" class="carousels__indicator"></label>
          <label for="2" class="carousels__indicator"></label>
          <label for="3" class="carousels__indicator"></label>
          <label for="4" class="carousels__indicator"></label>
          <label for="5" class="carousels__indicator"></label>
          <label for="6" class="carousels__indicator"></label>
          <label for="7" class="carousels__indicator"></label>
        </div>
      
      </ul>
      
      <!--Testing video capabilites-->
      <!--<div class="basicFontStyle" style="width: 50%; margin: 0 auto;">-->
      <!--  <br><br>-->
      <!--  <p style="text-align:center">Testing video</p>-->
      <!--  <iframe align="middle" width="780" height="415"-->
      <!--    src="https://www.youtube.com/embed/-Z4jx5VMw8M" frameborder="0" allowfullscreen>-->
      <!--  </iframe> -->
      <!--</div>-->
    </div>
</div>

@endsection