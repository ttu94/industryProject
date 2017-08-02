@extends('layouts.masterLogin')

@section('title')
    {{--Module names needs to be taken out of database--}}
    Module 4: Functions
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
    <!--THIS ALSO NEEDS TO BE TAKEN FROM DB-->
   <h4>Module 4: Functions</h4>
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
      <a href={{ route("module_quiz_info", array("id" => Auth::user()->id, "quizNo" => "Module 4")) }} ><button class="btn darkgrey2">Begin Quiz >></button></a>
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
          <br>
          <p class="modh2">4 a) Vertebral column</p>
          <menu class="words2">
              <li>The vertebral column, more commonly known as the backbone, serves some very crucial functions.</li>
              <li>First and foremost, it covers, contains and protects the spinal cord.</li>
              <li>The backbone is necessary for our erect posture as well as carrying and transmitting our body weight to the lower limbs.</li>
              <li>The typical shape of the vertebrae provide the surface area for our back muscles to attach and maintain an upright posture.</li>
              <li>The vertebral column also provides attachment to the shoulder girdle, the ribcage and the pelvis.</li>
          </menu>
        </li>
        
        <!--SLIDE 2-->
        <li class="carousels__slide">
          <br>
          <p class="modh2">4 b) Spinal cord</p>
          <menu class="words2">
              <li>The spinal cord mainly functions as a conduit between brain and the rest of body.</li>
              <li>It carries all the sensory information from the body and relays it to brain; and carries motor commands from the brain and relays them to the body.</li>
              <li>The spinal cord also controls some reflexes that protect the body from certain harmful stimuli such as pain, heat, extreme cold, electric shocks etc.</li>
              <li>The neurons in the grey matter control these reflexes, and give rise to the spinal nerves.</li>
              <li>The tracts in the white matter perform specific functions and carry specific information as shown in the figure on next page.</li>
          </menu>
        </li>
        
        <!--SLIDE 3-->
        <li class="carousels__slide words2">
          <div class="col-md-12">
            <br>
                <img src="{{ URL::to('/') }}/images/Module4/mod4img3.png" width="100%" height="525px"></img><br><br>
                <p class="words2" style="text-align:center"><strong>Figure: </strong>Sensory and Motor Functions of the spinal cord</p>
            </div>
        </li>
        
        <!--SLIDE 4-->
        <li class="carousels__slide">
          <p class="modh2">4 c) Spinal nerves and dermatome</p>
          <div class="col-md-7">
            <menu class="words2">
              <li>As mentioned before, each spinal nerve supplies a specific region of the body. These regions are called dermatomes. The dermatomes and their spinal nerve roots are shown in this figure.</li>
              <li>Other than the dermatomes, the spinal nerves supply specific muscle groups and organs.</li>
              <li>The cervical nerves together supply the muscles controlling neck movements and the upper limb.</li>
              <li>The thoracic nerves supply the muscles of trunk and abdomen including the intercostal muscles.</li>
              <li>Lumbar and sacral nerve roots’ somatic fibres supply the muscles of the lower limbs.</li>
            </menu>
          </div>
          <div class="col-md-5">
                <img src="{{ URL::to('/') }}/images/Module4/mod4img2.png" width="100%" height="600px"></img><br>
                <p class="words2" style="text-align:center"><strong>Figure: </strong>Dermatomes and their spinal nerve roots</p>
          </div>
          
        </li>
        
        <!--SLIDE 5-->
        <li class="carousels__slide">
          <div class="col-md-12">
            <menu class="words2">
              <br>
              <li>Sympathetic supply from the nerve root C3, C4 and C5 supply the diaphragm.</li>
              <li>Sympathetic nerve supply to the heart and the respiratory tract is derived from nerve roots T1-T4.</li>
              <li>The rest of the thoracic nerves provide sympathetic innervation to the abdominal organs like stomach, intestines, colon, pancreas, liver and adrenals.</li>
              <li>Nerve roots T12 along with L1 and L2 provide sympathetic supply to the kidneys, bladder, rectum and the external genitalia. These structures receive parasympathetic nerve supply from the sacral autonomic fibres from roots of S2, S3 and S4 spinal nerves.</li>
            </menu>
            <br><br>
            <p class="endmess text2"><i><strong>This is the end of Module 4: Functions
            <br> You may wish to read over the module content again, or you can begin the multiple-choice quiz by clicking the 'Begin Quiz' button above.
            </strong></i>
            </p>
          </div>
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