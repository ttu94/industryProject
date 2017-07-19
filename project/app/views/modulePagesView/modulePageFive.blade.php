@extends('layouts.masterLogin')

@section('title')
    {{--Module names needs to be taken out of database--}}
    Module 5: SCI mechanisms
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
    <!--THIS ALSO NEEDS TO BE TAKEN FROM DB-->
   <h4>Module 5: SCI mechanisms</h4>
@endsection

@section('content')
<div class="container-fluid"> 
    <!--background-image: url("https://dssofgcsc.files.wordpress.com/2010/07/spine.jpg")-->
    <br>
    <div class="col-md-7">
      <a href="{{ URL::to('/') }}/pdfs/Module_1_-_Demographics_&_Economics_of_SCI.pdf" 
      target="_blank" class="btn2 pdf">Download PDF</a>
    </div>
    <div class="col-md-5">
      <!--INCOMPLETE ROUTE, requires to take module ID-->
      <a href={{ route("module_quiz_info", array("id" => Auth::user()->id)) }} ><button class="btn darkgrey2">Begin Quiz >></button></a>
    </div>
    <div class="col-md-12" >
      <ul class="carousels my-carousels">
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
          <div class="col-md-12">
            <p class="modh2">5 a)	Three Column Model</p>
            <menu class="words2">
              <li><strong>Physicians use a three column model of the spinal column in order to describe and explain the spinal column injuries.</strong></li>
              <li>These three columns are as follows:</li>
              <ol type="1">
                <li>Anterior column - the anterior longitudinal ligament and the anterior one-half of the vertebral body,</li>
                <li>Middle column - the posterior one-half of the vertebral body</li>
                <li>Posterior column - laminae and the spinal canal.</li>
              </ol>
            </menu>
              <!--<div class="col-md-9">-->
                  <img src="{{ URL::to('/') }}/images/Module5/mod5img1.png" width="600px" height="300px" style="display:block; margin:auto"></img>
              <!--</div>-->
          </div>
        </li>
        
        <!--SLIDE 2-->
        <li class="carousels__slide">
          <div class="col-md-12">
            <br><br>
            <img src="{{ URL::to('/') }}/images/Module5/mod5img2.png" width="100%" height="500px"></img>
            </div>
        </li>
        
        <!--SLIDE 3-->
        <li class="carousels__slide words2">
          <br>
          <p class="modh2">5 b) Clinical classification</p>
          <menu class="words2">
            <li>The clinical classification of spinal cord injuries is done by guidelines given by the American Spinal Injury Association (ASIA).</li>
            <li>There are 5 clinical grades in ASIA classification:</li>
            <ul type="">
              <li><u>A = Complete injury</u>: No motor or sensory function is preserved in the sacral segments S4-S5. </li>
              <li><u>B = Incomplete injury</u>: Only sensory (no motor) function is preserved below the neurological level including the sacral segments S4-S5. </li>
              <li><u>C = Incomplete injury</u>: Motor function is preserved below the neurological level, but with at least half of major muscles below the neurological level showing a muscle power less than grade 3..</li>
              <li><u>D = Incomplete injury</u>: Motor function is preserved below the neurological level, and over half of major muscles below the neurological level have a muscle power of grade 3 or more.</li>
              <li><u>E = Normal</u>: Normal motor and sensory function.</li>
            </ul>
          </menu>
        </li>
        
        <!--SLIDE 4-->
        <li class="carousels__slide">
            <p class="modh2">5 c) Sequele to SCI</p>
            <menu class="words2">
              <li>Sequelae of spinal cord injury are described in the following phases.</li>
              <li>The events that occur in each phase are specific and signify specific stages of injury progression or recovery.</li>
            </menu>
            <div class="col-md-12">
                <img src="{{ URL::to('/') }}/images/Module5/mod5img3.png" width="100%" height="450px"></img>
            </div>
        </li>
        
        <!--SLIDE 5-->
        <li class="carousels__slide">
            <menu class="words4">
              <li>Other than the spinal cord itself, a number of body systems are affected following the spinal cord injury:</li>
              <ol type="1">
                <li>Neurogenic shock- involves the whole nervous system</li>
                <li>Thromboembolism- stagnant blood inside the veins may form clots</li>
                <li>Bed sores - due to immobility</li>
                <li>Pain – not only in the acute phase, also in chronic phase</li>
                <li>Mental health is compromised leading to depression, anxiety, shock</li>
                <li>Autonomic dysregulation involving heart, breathing, bowel movements, bladder control, sweating, temperature dysregulation and sexual dysfunction.</li>
                <li>In severe cases of quadriplegia, autonomic dysreflexia may happen where the patient suffers from very high blood pressure, low hear rate, low respiration rate, excessive sweating and hot flushed skin. This happens without warning and may be life threatening if left untreated.</li>
              </ol>
            </menu><br>
            <p class="endmess text2"><i><strong>This is the end of Module 4: Functions
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
        </div>
      
      </ul>
    </div>
</div>

@endsection