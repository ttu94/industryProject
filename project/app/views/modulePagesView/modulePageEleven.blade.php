@extends('layouts.masterLogin')

@section('title')
    {{--Module names needs to be taken out of database--}}
    Module 11: Repair/therapeutic strategies
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
    <!--THIS ALSO NEEDS TO BE TAKEN FROM DB-->
   <h4>Module 11: Repair/therapeutic strategies</h4>
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
        <input type="radio" id="6" name="activator" class="carousels__activator"/>
        
        <div class="carousels__controls">
          <label for="2" class="carousels__control carousels__control--backward"></label>
          <label for="6" class="carousels__control carousels__control--forward"></label>
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
          <label for="1" class="carousels__control carousels__control--backward"></label>
          <label for="5" class="carousels__control carousels__control--forward"></label>
        </div>
      
        <!--SLIDE 1-->
        <li class="carousels__slide">
          <div class="col-md-12">
            <br>
            <p class="modh2">Is there a cure for spinal cord injury?</p>
            <menu class="words2">
              <li>The short answer is: Not Yet</li>
              <li>Many doctors and scientists dedicate their lives to develop a cure. The research has yielded many promising results, and in all fairness, we may have a cure very soon.</li>
              <li>In this module, we will take a look at some of the most promising strategies.</li>
            </menu>
            <br>
            <p class="words2" style="color:#195DA3">You will be learning about different repair/therapeutic strategies which will include:</p>
            <ol class="words2" type="a">
              <li>Growth factors</li>
              <li>Cell transplants</li>
              <li>Natural products</li>
              <li>Robotics, neural interfaces</li>
            </ol>
          </div>
        </li>
        
        <!--SLIDE 2-->
        <li class="carousels__slide">
          <div class="col-md-12">
            <br>
            <p class="modh2">11 a) Growth factors</p>
            <menu class="words2">
              <li>Growth factors are natural proteins created by the body and play an important part during development of a child’s body; and help repair the nerves, blood vessels and other parts of the body.</li>
              <li>Neurotrophins are the growth factors involved in maintaining nerve health. Neurotrophins play an important role in keeping the neurons and glia (supporting cells) within the nerve functioning healthily.</li>
              <li>By adding more growth factors to a treatment we hope to encourage the patient’s own cells to heal the damaged area. And if the right combination of growth factors can be found, the treatment can be tailored to the patient’s needs – selecting the right growth factor to promote specifically the aid that the patient needs.</li>
              <li>However, it is possible that the cells in the injury site may not respond to the growth factors at all. For this reason, growth factors are only a small part of solution. By using growth factors with a transplant of cells that do respond to these proteins we may ensure greater success.</li>
            </menu>
          </div>
        </li>
        
        <!--SLIDE 3-->
        <li class="carousels__slide words2">
          <br>
          <p class="modh2">11 b) Cell transplants</p>
          <menu class="words2">
            <li>A number of different cells are being looked at as potential candidates for healing the spinal cord injuries.</li>
            <li>Stem cells are the cells that have the capacity to create almost any type of cells the body needs, but they are extremely tricky to get and even more so to control what type of cells they turn into.</li>
            <li>Fibroblasts are the cells that heal any physical injuries, other than the nervous injuries, by making scar tissue. They are also considered to have some usefulness in spinal cord injuries by some, but the neuroscientists are conflicted about their use.</li>
            <li>Special supporting cells from the olfactory nerve (the nerve for sense of smell), known as the olfactory ensheathing cells (OECs) are now known for their role in day to day repair and maintenance of nerve cells from the olfactory nerve.</li>
          </menu>
          <br>
          <p class="words2" style="text-align:center;color:#195DA3">This section continues on to the next slide</p>
        </li>
        
        <!--SLIDE 4-->
        <li class="carousels__slide">
          <br>
          <menu class="words2">
            <li>They replace almost the entire olfactory nerve every month. The hope behind their use is, that they might do the same for the spinal cord and repair the damaged axons in the cord.</li>
            <li>A lot of studies have been done on these cells and they are proven to be safe for transplant.</li>
            <li>However, they are very difficult to isolate from the mixture of cells that we get from a nose biopsy and if not purified properly, they can lead to undesirable outcomes.</li>
          </menu>
        </li>
        
        <!--SLIDE 5-->
        <li class="carousels__slide">
          <br>
          <p class="modh2">11 c) Natural products</p>
          <menu class="words2">
            <li>Natural products (NPs) are defined as small molecules produced by living systems such as marine organisms, plants or microbes, which are not essential for their survival.</li>
            <li>It is estimated that NPs represent approximately 60% of the drugs on the market.</li>
            <li>NPs exhibit a large spectrum of biological activities including neuroprotective, cardio protective, antibacterial, antioxidant, anticancer and antimalarial activities for instance.</li>
            <li>NPs can inhibit the inflammatory process after CNS injuries, protect cells from excessive reactive oxygen species and enhance neural regeneration.</li>
            <li>Although on their own NPs may not be capable of inducing regeneration in the nervous tissue, they are being explored for use as supportive and stimulating agents for cell therapies.</li>
            <li>NPs have shown promise with regards to significantly shortening the cell preparation time in the labs, improving the survivability of transplanted cells and hastening their reparative actions once transplanted.</li>
          </menu>
        </li>
        
        <!--SLIDE 6-->
        <li class="carousels__slide">
          <p class="modh2">11 d) Robotics, neural interfaces</p>
          <menu class="words2">
            <li>The developments in use of robotics and brain-computer-interfaces has opened a new direction for managing the spinal cord injury patients.</li>  
            <li>The prostheses and implants, although not inducing any kind of physical recovery, show huge promise for reducing the devastating disabilities experienced by SCI survivors.</li>
            <li>The patients can use the robotic devices or exoskeletons to accomplish the tasks that the injury prevents them from doing.</li>
            <li>However, the biggest drawback is that these devices do not help with the loss of sensations and this in turn may cause more problems such not knowing how much force to use for moving something or if the object the patient is trying to pick up hot or cold.</li>
            <li>Most devices require the person to undergo arduous and very complex training before they can use it effectively.</li>
          </menu>
          <p class="endmess text2">
            <i><strong>This is the end of Module 11: Repair/therapeutic strategies
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
        </div>
      
      </ul>
    </div>

</div>

@endsection