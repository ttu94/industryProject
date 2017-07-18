@extends('layouts.masterLogin')

@section('title')
    {{--Module names needs to be taken out of database--}}
    Module 5: SCI mechanisms
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
    <!--THIS ALSO NEEDS TO BE TAKEN FROM DB-->
   <h2>Module 5: SCI mechanisms</h2>
@endsection

@section('content')
<div class="container-fluid"> 
    <!--background-image: url("https://dssofgcsc.files.wordpress.com/2010/07/spine.jpg")-->
    <br>
    <div class="col-md-7">
      <a href="{{ URL::to('/') }}/pdfs/Module_1_-_Demographics_&_Economics_of_SCI.pdf" 
      target="_blank" class="btn2 whitebrown">Download PDF</a>
    </div>
    <div class="col-md-5">
      <!--INCOMPLETE ROUTE, requires to take module ID-->
      <a href={{ route("module_quiz_info", array("id" => Auth::user()->id)) }} ><button class="btn whitebrown">Begin Quiz >></button></a>
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
          <p class="modh1">5a)	Three Column Model</p>
         <table class="b">
            <tr>
              <td class="b2 words2">•</td>
              <td class="b2 words2"><strong>Physicians use a three column model of the spinal column in order to describe and explain the spinal column injuries.</td>
            </tr>
            <tr>
              <td class="b2 words2">•</td>
              <td class="b2 words2">These three columns are as follows:</td>
            </tr>
            <tr>
              <td class="b2 words2">1</td>
              <td class="b2 words2">Anterior column - the anterior longitudinal ligament and the anterior one-half of the vertebral body,</td>
            </tr>
            <tr>
              <td class="b2 words2">2</td>
              <td class="b2 words2">Middle column - the posterior one-half of the vertebral body</td>
            </tr>
            <tr>
              <td class="b2 words2">3</td>
              <td class="b2 words2">Posterior column - laminae and the spinal canal.</td>
            </tr>
         </table>
          <div class="col-md-12">
                <img src="{{ URL::to('/') }}/images/Module5/mod5img1.png" width="100%" height="300px"></img>
            </div>
        </li>
        
        <!--SLIDE 2-->
        <li class="carousels__slide">
          <div class="col-md-12">
                <img src="{{ URL::to('/') }}/images/Module5/mod5img2.png" width="100%" height="700px"></img>
            </div>
        </li>
        
        <!--SLIDE 3-->
        <li class="carousels__slide words2">
            <p class="modh2">⤘ 5b)	Clinical classification</p>
            <table class="b">
              <tr>
                <td class="b2 words2">•</td>
                <td class="b2 words2">The clinical classification of spinal cord injuries is done by guidelines given by the American Spinal Injury Association (ASIA). </td>
              </tr>
              <tr>
                <td class="b2 words2">•</td>
                <td class="b2 words2">There are 5 clinical grades in ASIA classification:</td>
              </tr>
              <tr>
                <td class="b2 words2">A&nbsp;=</td>
                <td class="b2 words2"><u>Complete injury: </u>No motor or sensory function is preserved in the sacral segments S4-S5. </td>
              </tr>
              <tr>
                <td class="b2 words2">B&nbsp;=</td>
                <td class="b2 words2"><u>Incomplete injury: </u>Only sensory (no motor) function is preserved below the neurological level including the sacral segments S4-S5. </td>
              </tr>
              <tr>
                <td class="b2 words2">C&nbsp;=</td>
                <td class="b2 words2"><u>Incomplete injury: </u>Motor function is preserved below the neurological level, but with at least half of major muscles below the neurological level showing a muscle power less than grade 3.</td>
              </tr>
              <tr>
                <td class="b2 words2">D&nbsp;=</td>
                <td class="b2 words2"><u>Incomplete injury: </u>Motor function is preserved below the neurological level, and over half of major muscles below the neurological level have a muscle power of grade 3 or more.</td>
              </tr>
              <tr>
                <td class="b2 words2">E&nbsp;=</td>
                <td class="b2 words2"><u>Normal: </u>Normal motor and sensory function.</td>
              </tr>
            </table>
        </li>
        
        <!--SLIDE 4-->
        <li class="carousels__slide">
            <p class="modh2">⤘ 5c) Sequele to SCI</p>
            <table class="b">
              <tr>
                <td class="b2 words2">•</td>
                <td class="b2 words2">Sequelae of spinal cord injury are described in the following phases. </td>
              </tr>
              <tr>
                <td class="b2 words2">•</td>
                <td class="b2 words2">The events that occur in each phase are specific and signify specific stages of injury progression or recovery.</td>
              </tr>
            </table>
          <div class="col-md-12">
                <img src="{{ URL::to('/') }}/images/Module5/mod5img3.png" width="100%" height="400px"></img>
            </div>
        </li>
        
        <!--SLIDE 5-->
        <li class="carousels__slide">
            <table class="b">
              <tr>
                <td class="b2 words2">•</td>
                <td class="b2 words2">Other than the spinal cord itself, a number of body systems are affected following the spinal cord injury:</td>
              </tr>
              <tr>
                <td class="b2 words2">&nbsp;&nbsp;•</td>
                <td class="b2 words2">Neurogenic shock- involves the whole nervous system</td>
              </tr>
              <tr>
                <td class="b2 words2">&nbsp;&nbsp;•</td>
                <td class="b2 words2">Thromboembolism- stagnant blood inside the veins may form clots</td>
              </tr>
              <tr>
                <td class="b2 words2">&nbsp;&nbsp;•</td>
                <td class="b2 words2">Bed sores - due to immobility</td>
              </tr>
              <tr>
                <td class="b2 words2">&nbsp;&nbsp;•</td>
                <td class="b2 words2">Pain – not only in the acute phase, also in chronic phase</td>
              </tr>
              <tr>
                <td class="b2 words2">&nbsp;&nbsp;•</td>
                <td class="b2 words2">Mental health is compromised leading to depression, anxiety, shock</td>
              </tr>
              <tr>
                <td class="b2 words2">&nbsp;&nbsp;•</td>
                <td class="b2 words2">Autonomic dysregulation involving heart, breathing, bowel movements, bladder control, sweating, temperature dysregulation and sexual dysfunction.</td>
              </tr>
              <tr>
                <td class="b2 words2">&nbsp;&nbsp;•</td>
                <td class="b2 words2">In severe cases of quadriplegia, autonomic dysreflexia may happen where the patient suffers from very high blood pressure, low hear rate, low respiration rate, excessive sweating and hot flushed skin. This happens without warning and may be life threatening if left untreated.</td>
              </tr>
            </table>
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