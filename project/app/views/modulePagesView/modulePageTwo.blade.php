@extends('layouts.masterLogin')

@section('title')
    {{--Module names needs to be taken out of database--}}
    Module 2: Spinal cord as a neutral tissue and injury to the nerves
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
    <!--THIS ALSO NEEDS TO BE TAKEN FROM DB-->
   <h4>Module 2: Spinal cord as a neutral tissue and injury to the nerves</h4>
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
      <a href={{ route("module_quiz_info", array("id" => Auth::user()->id, "quizNo" => "Module 2")) }} ><button class="btn darkgrey2">Begin Quiz >></button></a>
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
          <p class="modh2">2 a) Organization of CNS & PNS</p>
          <br><br>
          <p class="words3 text2" style="color:black">To understand the spinal cord injury, we need<br><br>
              to understand the structure and function of<br><br>
              the cord properly. To do that, we must first<br><br>
              understand the organization of the<br><br> 
              central and peripheral nervous systems</p>         
        </li>
        
        <!--SLIDE 2-->
        <li class="carousels__slide">
          <div class="col-md-7">
            <menu class="words2">
              <li>The brain and spinal cord together make the central nervous system (CNS).</li>
              <li>Brain gives off cranial nerves and the cord gives off spinal nerves that run everywhere in the body to make the neural network and control the entire body.</li>
              <li>Cranial and spinal nerves along with their branches make the peripheral nervous system (PNS).</li>
              <li>Brain acts as the control and command centre that receives all the sensory information from all over the body and sends out commands to the relevant parts of the body</li>
              <li>Spinal cord acts as the main conduit that carries all this information to and from between the brain and the rest of the body.</li>
            </menu>
          </div>
          <div class="col-md-5">
            <br>
            <img src="{{ URL::to('/') }}/images/Module2/mod2img1.png" width="100%" height="600px"></img>
          </div>
        </li>
        
        <!--SLIDE 3-->
        <li class="carousels__slide words2">
          <p class="modh2">2 b) Body’s response to an injured nerve and injured spinal cord
          <br>Injury to the nervous system</p>
          <menu class="words2">
            <li>The nervous system is made of very specialized cells called neurons.</li>
            <li>In adults, normally when a neuron dies or gets damaged, it cannot be replaced by a new neuron. The loss is rather permanent.</li>
            <li>This is why any injury to the nervous system results in more or less permanent damage.</li>
            <li>However, the body responds differently to an injury to a peripheral nerve as compared to a spinal cord injury.</li>
          </menu>
          <p class="modh2">The Neuron</p>
          <img src="{{ URL::to('/') }}/images/Module2/mod2img2.png" width="100%" height="300px"></img>
        </li>
        
        <!--SLIDE 4-->
        <li class="carousels__slide">
          <br>
          <p class="modh2">Injury to a peripheral nerve</p>
          <menu class="words2">
            <li>A peripheral nerve is made of myelinated axons from the neurons. Hundreds of axons come together to form a bundle that we see as a nerve.</li>
            <li>In case of a peripheral nerve injury, it is in fact these axons that are injured.</li>
            <li>Our bodies can still regrow the damaged axons and regain the function lost with the initial nerve damage, as long as the cell bodies are unharmed.</li>
            <li>The damaged axons are slowly degraded and removed so that the cell body can regrow a new one in its place. The details of this process are covered in Module 9.</li>
          </menu>
        </li>
        
        <!--SLIDE 5-->
        <li class="carousels__slide">
          <br>
          <p class="modh2">Injury to spinal cord</p>
          <menu class="words2">
            <li>Injury to a spinal cord is much different that injury to a peripheral nerve. Spinal cord contains many axons in the white matter which are enveloped by oligodendrocytes.</li>
            <li>In the core of the spinal cord, the grey matter contains numerous cell bodies which are also damaged and lost in case of a spinal cord injury.</li>
            <li>There are a lot of small and microscopic blood vessels in the cord which rupture and form hematoma (bruising) in an injured cord.</li>
            <li>This leads to continued damage to the spinal cord in an insidious manner, known as secondary damage.</li>
          </menu>
          <br><br>
          <p class="endmess text2"><i><strong>This is the end of Module 2: Spinal cord as a neutral tissue and injury to the nerves.
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