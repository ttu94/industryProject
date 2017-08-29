@extends('layouts.masterLogin')

@section('title')
    {{--Module names needs to be taken out of database--}}
    Module 11: Repair therapeutic strategies
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
    <!--THIS ALSO NEEDS TO BE TAKEN FROM DB-->
   <h4>Module 11: Repair therapeutic strategies</h4>
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
      <a href={{ route("module_quiz_info", array("id" => Auth::user()->id, "quizNo" => "Module 11")) }} ><button class="btn darkgrey2">Begin Quiz >></button></a>
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
            <p class="modh2">6a) Complete</p>
            <menu class="words2">
              <li>A complete spinal cord injury is an injury where the whole thickness of spinal cord is injured.</li>
              <li>This means that the spinal cord below the level injury can neither receive nor send any signals across the injury site.</li>
              <li>In other words, the injury causes complete paralysis and complete loss of sensations below the level of injury.</li>
              <li>A complete transection of cord, however rare, can cause a complete injury. Blunt injury like a contusion or laceration of the cord tissue can also result in a complete injury if the trauma is too severe.</li>
            </menu>
          </div>
        </li>
        
        <!--SLIDE 2-->
        <li class="carousels__slide">
            <div class="col-md-12">
                <p class="modh2">6b) Incomplete</p>
                <menu class="words2">
                    <li>An incomplete injury is any injury where there is still some connection left intact that can send and/or receive signals across the level of injury.</li>
                    <li>Understandably, the severity of this type of injury would vary greatly depending upon the amount of spinal tissue left intact after the injury.</li>
                    <li>There may be some loss of sensations, loss of a particular sensation, loss of all or some motor activity or diminished muscle power depending upon which spinal tracts are injured and to what extent they are injured.</li>
                </menu>
            </div>
        </li>
        
        <!--SLIDE 3-->
        <li class="carousels__slide words2">
            <br>
            <p class="modh2">6c) Physical injuries:</p>
            <menu class="words2">
                <ul type="">
                    <li>i) Transection</li>
                    <li>ii) Contusion</li>
                    <li>iii) Laceration</li>
                </ul>
                <p class="modh2">Transection</p>
                <li>In this type of injury, the cord is sliced through by the injuring force. If the cord is completely sliced through, the injury is known as complete cord transection.</li>
                <li>If the cord is only partially cut through, the resulting injury is called a partial cord transection. Very rarely, the cord is only cut halfway through from left or right side, which is known as Brown Sequard Syndrome.</li>
                <li>In transection type of injuries, the injury site is relatively clean and bleeding is relatively less. SCI resulting from a stabbing may be a transection type cord injury.</li>
            </menu>
        </li>
        
        <!--SLIDE 4-->
        <li class="carousels__slide">
            <p class="modh2">Contusion</p>
            <menu class="words2">
              <li>Same as any other tissue, a blunt injury to the spinal cord leads to a contusion type injury.</li>
              <li>The cord is surrounded completely inside the bony spinal canal. Any sudden movement or impact can cause the cord to slam against the spinal canal, crushing the meninges and suffering the contusion injury itself.</li>
              <li>Since the cord tissue is very soft, fragile and highly vascular; such an injury would most like result in significant haemorrhage. As the haemorrhage clots and settles in the tissue, it presses and crushes the cord tissue causing further injury.</li>
              <li>Contusion injury usually is incomplete but the injury may extend across many spinal segments causing extensive functional loss.</li>
              <li>Injuries without significant vertebral fractures such as whiplash injury, may result in contusion of the cord.</li>
            </menu>
        </li>
        
        <!--SLIDE 5-->
        <li class="carousels__slide">
            <p class="modh2">Laceration</p>
            <menu class="words4">
              <li>The laceration injuries are the worst and most severe in nature as they are almost always accompanied by significant damage to the vertebrae, spreading numerous bone fragments injuring the already hurt cord.</li>
              <li>At the site of the impact, the cord suffers from contusion like injury, but the damage caused by bone fractures and dislocation also cuts and tears at the cord tissue.</li>
              <li>Tearing, cutting and bruising of the cord usually means extensive structural damage and functional loss.</li>
              <li>Violent injuries with significant damage and dislocations of the vertebrae usually present with laceration type of injuries.</li>
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
    </div>

</div>

@endsection