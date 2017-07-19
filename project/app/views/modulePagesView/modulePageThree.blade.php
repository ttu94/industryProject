@extends('layouts.masterLogin')

@section('title')
    {{--Module names needs to be taken out of database--}}
    Module 3: Structure
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
    <!--THIS ALSO NEEDS TO BE TAKEN FROM DB-->
   <h2 style="color:white">Module 3: Structure</h2>
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
          <p class="modh1">3 a) Vertebral Column</p>
          <div class="col-md-7">
              <menu class="words2">
                <li>The vertebral or the backbone is a stack like arrangement small bony blocks known as the vertebrae.</li>
                <li>There are a total of 33 vertebrae:</li>
                  <ul>
                    <li>- 7 in the neck (cervical vertebrae)</li>
                    <li>- 12 in the upper back (thoracic vertebrae)</li>
                    <li>- 5 in the lower back (lumbar vertebrae)</li>
                    <li>- 5 in the hip area (fused into a single sacrum)</li>
                    <li>- 4 in the tailbone (fused to form a single coccyx)</li>
                  </ul>
                <li>Every individual vertebra is separated from the next vertebra by a soft cushion like disc of cartilage called an intervertebral disc.</li>
                <li>Since sacrum and coccyx are fused, the vertebrae in those are not separated by the intervertebral discs.</li>
              </menu>
            </div>
            <div class="col-md-5">
              <br>
              <img src="{{ URL::to('/') }}/images/Module3/mod3img1.png" width="100%" height="600px"></img>
            </div>
        </li>
        
        <!--SLIDE 2-->
        <li class="carousels__slide">
          <p class="modh2">3 b) Vertebra</p>
          <div class="col-md-5">
            <menu class="words2">
              <li>The sketches here show a typical vertebra.</li>
              <li>The vertebral body and laminae form the vertebral foramen, and the vertebral foramen of all the vertebrae form a long vertebral canal that contains the spinal cord.</li>
              <li>Cervical vertebrae are smaller and flatter compared to others.</li>
              <li>Thoracic vertebrae are larger than the cervical ones and they provide attachment to the rib cage.</li>
              <li>Lumbar vertebrae are the largest and thickest.</li>
            </menu>
          </div>
          <div class="col-md-7">
            <img src="{{ URL::to('/') }}/images/Module3/mod3img2.png" width="100%" height="600px"></img>
          </div>
        </li>
        
        <!--SLIDE 3-->
        <li class="carousels__slide">
          <p class="modh2">3 c) Meninges</p>
          <div class="col-md-6">
            <table class="b">
              <tr>
                <td class="b2 words4">•</td>
                <td class="b2 words4">The brain and spinal cord have 3 layers of wrappings called meninges:</td>
              </tr>
              <tr>
                <td class="b2 words4"></td>
                <td class="b2 words4">1. Dura mater</td>
              </tr>
              <tr>
                <td class="b2 words4"></td>
                <td class="b2 words4">2. Arachnoid mater</td>
              </tr>
              <tr>
                <td class="b2 words4"></td>
                <td class="b2 words4">3. Pia mater</td>
              </tr>
              <tr>
                <td class="b2 words4">•</td>
                <td class="b2 words4">The dura mater is the outermost layer and the strongest layer. The space between dura and the vertebrae is known as epidural space.</td>
              </tr>
            </table>
          </div>
          <div class="col-md-6">
            
            <img src="{{ URL::to('/') }}/images/Module3/mod3img3.png" width="100%" height="375px"></img>
          </div>
          <div class="col-md-12">
            <table>
              <tr>
                <td class="b2 words4">•</td>
                <td class="b2 words4">The middle layer is called arachnoid layer because it has a web-like network of blood vessels that produces the cerebrospinal fluid (CSF).</td>
              </tr>
              <tr>
                <td class="b2 words4">•</td>
                <td class="b2 words4">Pia mater is the innermost layer which is tightly attached to the tissue of brain and spinal cord like a transparent, laminating membrane.</td>
              </tr>
              <tr>
                <td class="b2 words4">•</td>
                <td class="b2 words4">Together all three layers of meninges protect the CNS from any harm.</td>
              </tr>
            </table>
          </div>
          
        </li>
        
        <!--SLIDE 4-->
        <li class="carousels__slide">
          <p class="modh2">3 d) Spinal Cord</p>
          <div class="col-md-8">
            <menu class="words2">
              <li>The spinal cord is a long and slender bundle of nerve fibres that connects the brain to the rest of the body</li>
              <li>It is about 45 centimetres long and extends from the first cervical vertebra till the lower border of first lumbar vertebra or the upper border of the second.</li>
              <li>The lower end tapers into a conical shape known as conus medularis.</li>
              <li>The tip of the conus is anchored to coccyx via a filament known as filum terminale.</li>
              <li>The cord is shorter than the vertebral column and therefore, the spinal segments and vertebral levels do not correspond with each other.</li>
              <li>The spinal cord gives off 31 pairs of spinal nerves, one pair from each segment: 8 cervical, 12 thoracic, 5 lumbar, 3 sacral and 1 coccygeal.</li>
            </menu>
          </div>
          <div class="col-md-4">
            <br><br>
            <img src="{{ URL::to('/') }}/images/Module3/mod3img6.png" width="100%" height="600px"></img>
          </div>
        </li>
        
        <!--SLIDE 5-->
        <li class="carousels__slide">
          <div class="col-md-5">
            <br>
            <table class="b">
              <tr>
                <td class="b2 words4">•</td>
                <td class="b2 words4">The spinal cord is divided into grey matter and white matter on the inside.</td>
              </tr>
              <tr>
                <td class="b2 words4">•</td>
                <td class="b2 words4">The core of the cord contains grey matter that looks like the letter ‘H’.</td>
              </tr>
              <tr>
                <td class="b2 words4">•</td>
                <td class="b2 words4">Grey matter contains the cell bodies of neurons that give off spinal nerve.</td>
              </tr>
            </table> 
          </div>
          <div class="col-md-7">
            <br><br>
            <img src="{{ URL::to('/') }}/images/Module3/mod3img5.png" width="100%" height="325px"></img>
          </div>
          <div class="col-md-12">
            <table class="b">
              <tr>
                <td class="b2 words4">•</td>
                <td class="b2 words4">The white matter surrounds the grey matter and forms the peripheral part of the cord. It appears white because it contains myelinated axon fibres in bundles travelling up and down the spinal cord.</td>
              </tr>
              <tr>
                <td class="b2 words4">•</td>
                <td class="b2 words4">These bundles are called spinal tracts. Tracts going up to the brain are called sensory or ascending tracts. These tracts carry all kinds of sensations from the body, to the brain</td>
              </tr>
              <tr>
                <td class="b2 words4">•</td>
                <td class="b2 words4">The tracts that travel from brain to the rest of body are known as motor or descending tracts. They carry commands issued from the brain to control all voluntary and non voluntary movements of the body.</td>
              </tr>
            </table>
          </div>
          
        </li>
        
        <!--SLIDE 6-->
        <li class="carousels__slide">
          <div class="col-md-12">
            <p class="modh2">3 e) Spinal Nerves</p>
            <menu class="words2">
              <li>As described before, the spinal cord gives off 31 pairs of spinal nerves: 8 cervical, 12 thoracic, 5 lumbar, 3 sacral and 1 coccygeal</li>
              <li>Each spinal segment gives off a nerve root from the front- the ventral root and a root from the back- the dorsal root on both the sides. The ventral and dorsal root from each side come together and join each other to form one spinal nerve.</li>
              <li>This way, each spinal segment gives off one pair of spinal nerves, one on each side. Each spinal nerve carries motor fibres from the ventral root sensory fibres to the dorsal root.</li>
              <li>Other than this, spinal nerves from cervical, thoracic and lumbar segments also carry sympathetic nerve fibres that control the autonomic (involuntary) actions.</li>
              <li>Each spinal nerve supplies specific region of the body and specific organs and muscles. The details of this functional distribution in in module 4.</li>
            </menu>
            <br>
            <p class="endmess text2"><i><strong>This is the end of Module 3: Structure
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
          <label for="6" class="carousels__indicator"></label>
        </div>
      
      </ul>

</div>

@endsection