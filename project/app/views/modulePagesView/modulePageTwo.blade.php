@extends('layouts.masterLogin')

@section('title')
    {{--Module names needs to be taken out of database--}}
    Module 2: Spinal cord as a neutral tissue and injury to the nerves
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
    <!--THIS ALSO NEEDS TO BE TAKEN FROM DB-->
   <h2>Module 2: Spinal cord as a neutral tissue and injury to the nerves</h2>
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
          <p class="modh1">2a) Organization of CNS & PNS</p>
          <br><br>
          <h1 style="text-align:center">To understand the spinal cord injury, we need<br><br>
              to understand the structure and function of<br><br>
              the cord properly. To do that, we must first<br><br>
              understand the organization of the<br><br> 
              central and peripheral nervous systems</h1>         
        </li>
        
        <!--SLIDE 2-->
        <li class="carousels__slide">
          <div class="col-md-6">
              <table class="b">
                <tr>
                  <td class="b2 words3">-</td>
                  <td class="b2 words3">The brain and spinal cord together make the central nervous system (CNS).</td>
                </tr>
                <tr>
                  <td class="b2 words3">-</td>
                  <td class="b2 words3">Brain gives off cranial nerves and the cord gives off spinal nerves that run everywhere in the body to make the neural network and control the entire body.</td>
                </tr>
                <tr>
                  <td class="b2 words3">-</td>
                  <td class="b2 words3">Cranial and spinal nerves along with their branches make the peripheral nervous system (PNS).</td>
                </tr>
                <tr>
                  <td class="b2 words3">-</td>
                  <td class="b2 words3">Brain acts as the control and command centre that receives all the sensory information from all over the body and sends out commands to the relevant parts of the body</td>
                </tr>
                <tr>
                  <td class="b2 words3">-</td>
                  <td class="b2 words3">Spinal cord acts as the main conduit that carries all this information to and from between the brain and the rest of the body.</td>
                </tr>
              </table>
            </div>
          <div class="col-md-6">
              <img src="{{ URL::to('/') }}/images/Module2/mod2img1.png" width="100%" height="650px"></img>
          </div>
        </li>
        
        <!--SLIDE 3-->
        <li class="carousels__slide words2">
          <p class="modh2">⤘ 2b) Body’s response to an injured nerve and injured spinal cord</p>
          <p class="modh2">Injury to the nervous system</p>
          <table class="b">
            <tr>
              <td class="b2 words2">•</td>
              <td class="b2 words2">The nervous system is made of very specialized cells called neurons.</td>
            </tr>
            <tr>
              <td class="b2 words2">•</td>
              <td class="b2 words2">In adults, normally when a neuron dies or gets damaged, it cannot be replaced by a new neuron. The loss is rather permanent.</td>
            </tr>
            <tr>
              <td class="b2 words2">•</td>
              <td class="b2 words2">This is why any injury to the nervous system results in more or less permanent damage.</td>
            </tr>
            <tr>
              <td class="b2 words2">•</td>
              <td class="b2 words2">However, the body responds differently to an injury to a peripheral nerve as compared to a spinal cord injury.</td>
            </tr>
          </table>
          <p class="modh2">The Neuron</p>
          <div class="col-md-12">
              <img src="{{ URL::to('/') }}/images/Module2/mod2img2.png" width="100%" height="300px"></img>
          </div>
        </li>
        
        <!--SLIDE 4-->
        <li class="carousels__slide">
          <p class="modh2">Injury to a peripheral nerve</p>
          <table class="b">
            <tr>
              <td class="b2 words2">•</td>
              <td class="b2 words2">A peripheral nerve is made of myelinated axons from the neurons. Hundreds of axons come together to form a bundle that we see as a nerve.</td>
            </tr>
            <tr>
              <td class="b2 words2">•</td>
              <td class="b2 words2">In case of a peripheral nerve injury, it is in fact these axons that are injured. </td>
            </tr>
            <tr>
              <td class="b2 words2">•</td>
              <td class="b2 words2">Our bodies can still regrow the damaged axons and regain the function lost with the initial nerve damage, as long as the cell bodies are unharmed.</td>
            </tr>
            <tr>
              <td class="b2 words2">•</td>
              <td class="b2 words2">The damaged axons are slowly degraded and removed so that the cell body can regrow a new one in its place. The details of this process are covered in Module 9.</td>
            </tr>
          </table>
        </li>
        
        <!--SLIDE 5-->
        <li class="carousels__slide">
          <p class="modh2">Injury to spinal cord</p>
          <table class="b">
            <tr>
              <td class="b2 words2">•</td>
              <td class="b2 words2">Injury to a spinal cord is much different that injury to a peripheral nerve. Spinal cord contains many axons in the white matter which are enveloped by oligodendrocytes.</td>
            </tr>
            <tr>
              <td class="b2 words2">•</td>
              <td class="b2 words2">In the core of the spinal cord, the grey matter contains numerous cell bodies which are also damaged and lost in case of a spinal cord injury.</td>
            </tr>
            <tr>
              <td class="b2 words2">•</td>
              <td class="b2 words2">There are a lot of small and microscopic blood vessels in the cord which rupture and form hematoma (bruising) in an injured cord.</td>
            </tr>
            <tr>
              <td class="b2 words2">•</td>
              <td class="b2 words2">This leads to continued damage to the spinal cord in an insidious manner, known as secondary damage.</td>
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