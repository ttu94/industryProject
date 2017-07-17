@extends('layouts.masterLogin')

@section('title')
    {{--Module names needs to be taken out of database--}}
    Module 3: Structures
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
    <!--THIS ALSO NEEDS TO BE TAKEN FROM DB-->
   <h2>Module 3: Structures</h2>
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
            <div class="col-md-8">
                <p class="modh1">3a) Vertebral Column</p>
                <table class="b">
                    <tr>
                        <td class="b2 words2">•</td>
                        <td class="b2 words2">The vertebral or the backbone is a stack like arrangement small bony blocks known as the vertebrae.</td>
                    </tr>
                    <tr>
                        <td class="b2 words2">•</td>
                        <td class="b2 words2">There are a total of 33 vertebrae:</td>
                    </tr>
                    <tr>
                        <td class="b2 words2">-</td>
                        <td class="b2 words2">7 in the neck (cervical vertebrae)</td>
                    </tr>
                    <tr>
                        <td class="b2 words2">-</td>
                        <td class="b2 words2">12 in the upper back (thoracic vertebrae)</td>
                    </tr>
                    <tr>
                        <td class="b2 words2">-</td>
                        <td class="b2 words2">5 in the lower back (lumbar vertebrae)</td>
                    </tr>
                    <tr>
                        <td class="b2 words2">-</td>
                        <td class="b2 words2">5 in the hip area (fused into a single sacrum)</td>
                    </tr>
                    <tr>
                        <td class="b2 words2">-</td>
                        <td class="b2 words2">4 in the tailbone (fused to form a single coccyx)</td>
                    </tr>
                    <tr>
                        <td class="b2 words2">•</td>
                        <td class="b2 words2">Every individual vertebra is separated from the next vertebra by a soft cushion like disc of cartilage called an intervertebral disc.</td>
                    </tr>
                    <tr>
                        <td class="b2 words2">•</td>
                        <td class="b2 words2">Since sacrum and coccyx are fused, the vertebrae in those are not separated by the intervertebral discs.</td>
                    </tr>
                </table>
                <br>
            </div>
            <div class="col-md-4">
                <img src="{{ URL::to('/') }}/images/Module3/mod3img1.png" width="100%" height="700px"></img>
            </div>
        </li>
        
        <!--SLIDE 2-->
        <li class="carousels__slide">
          <div class="col-md-4">
              <p class="modh2">⤘ 3b) Vertebra</p>
              <table class="b">
                <tr>
                  <td class="b2 words3">•</td>
                  <td class="b2 words3">The sketches here show a typical vertebra.</td>
                </tr>
                <tr>
                  <td class="b2 words3">•</td>
                  <td class="b2 words3">The vertebral body and laminae form the vertebral foramen, and the vertebral foramen of all the vertebrae form a long vertebral canal that contains the spinal cord.</td>
                </tr>
                <tr>
                  <td class="b2 words3">•</td>
                  <td class="b2 words3">Cervical vertebrae are smaller and flatter compared to others.</td>
                </tr>
                <tr>
                  <td class="b2 words3">•</td>
                  <td class="b2 words3">Thoracic vertebrae are larger than the cervical ones and they provide attachment to the rib cage.</td>
                </tr>
                <tr>
                  <td class="b2 words3">•</td>
                  <td class="b2 words3">Lumbar vertebrae are the largest and thickest.</td>
                </tr>
              </table>              
            </div>
            <div class="col-md-8">
                <img src="{{ URL::to('/') }}/images/Module3/mod3img2.png" width="100%" height="700px"></img>
            </div>
        </li>
        
        <!--SLIDE 3-->
        <li class="carousels__slide">
          <div class="col-md-6">
              <p class="modh2">⤘ 3C) Meninges</p>
              <table class="b">
                <tr>
                  <td class="b2 words3">•</td>
                  <td class="b2 words3">The brain and spinal cord have 3 layers of wrappings called meninges:</td>
                </tr>
                <tr>
                  <td class="b2 words3">&nbsp;&nbsp;1</td>
                  <td class="b2 words3">Dura mater</td>
                </tr>
                <tr>
                  <td class="b2 words3">&nbsp;&nbsp;2</td>
                  <td class="b2 words3">Arachnoid mater</td>
                </tr>
                <tr>
                  <td class="b2 words3">&nbsp;&nbsp;3</td>
                  <td class="b2 words3">Pia mater</td>
                </tr>
                <tr>
                  <td class="b2 words3">•</td>
                  <td class="b2 words3">The dura mater is the outermost layer and the strongest layer. The space between dura and the vertebrae is known as epidural space.</td>
                </tr>
                <tr>
                  <td class="b2 words3">•</td>
                  <td class="b2 words3">The middle layer is called arachnoid layer because it has a web-like network of blood vessels that produces the cerebrospinal fluid (CSF)</td>
                </tr>
                <tr>
                  <td class="b2 words3">•</td>
                  <td class="b2 words3">Pia mater is the innermost layer which is tightly attached to the tissue of brain and spinal cord like a transparent, laminating membrane.</td>
                </tr>
                <tr>
                  <td class="b2 words3">•</td>
                  <td class="b2 words3">Together all three layers of meninges protect the CNS from any harm.</td>
                </tr>
              </table>              
            </div>
            <div class="col-md-6">
                <img src="{{ URL::to('/') }}/images/Module3/mod3img3.png" width="100%" height="450px"></img>
            </div>
        </li>
        
        <!--SLIDE 4-->
        <li class="carousels__slide">
          <div class="col-md-6">
              <p class="modh2">⤘ 3D) Spinal Cord</p>
              <table class="b">
                <tr>
                  <td class="b2 words3">•</td>
                  <td class="b2 words3">The spinal cord is a long and slender bundle of nerve fibres that connects the brain to the rest of the body</td>
                </tr>
                <tr>
                  <td class="b2 words3">•</td>
                  <td class="b2 words3">It is about 45 centimetres long and extends from the first cervical vertebra till the lower border of first lumbar vertebra or the upper border of the second.</td>
                </tr>
                <tr>
                  <td class="b2 words3">•</td>
                  <td class="b2 words3">The lower end tapers into a conical shape known as conus medularis.</td>
                </tr>
                <tr>
                  <td class="b2 words3">•</td>
                  <td class="b2 words3">The tip of the conus is anchored to coccyx via a filament known as filum terminale.</td>
                </tr>
                <tr>
                  <td class="b2 words3">•</td>
                  <td class="b2 words3">The cord is shorter than the vertebral column and therefore, the spinal segments and vertebral levels do not correspond with each other.</td>
                </tr>
                <tr>
                  <td class="b2 words3">•</td>
                  <td class="b2 words3">The spinal cord gives off 31 pairs of spinal nerves, one pair from each segment: 8 cervical, 12 thoracic, 5 lumbar, 3 sacral and 1 coccygeal.</td>
                </tr>
              </table>              
            </div>
            <div class="col-md-6">
                <img src="{{ URL::to('/') }}/images/Module3/mod3img4.png" width="100%" height="700px"></img>
            </div>
        </li>
        
        <!--SLIDE 5-->
        <li class="carousels__slide">
          <br>
          <p>In addition to these costs, the patients suffer from loss of wages, loss of 
             productivity, dependence on others for their physical needs and a number of secondary conditions 
             requiring further medical assistance which adds to the economic burden mentioned here.</td>
          <br><br>
          <p><u><strong>Table:</strong> Estimated costs for treatment of Spinal Cord Injuries at different levels, 
             as given by National Spinal Cord Injury Statistical Centre, US.</u></p>
          <table class="a">
            <tr>
              <th>Extent of Injury</th>
              <th>Cost for the 1st year</th>
              <th>Each following year</th>
            </tr>
            <tr>
              <td style="border: none">C1-C4 (Grade A,B,C)</td>
              <td style="border: none">1 Million</td>
              <td style="border: none">185,000</td>
            </tr>
            <tr>
              <td style="border: none">C5-C8 (Grade A,B,C)</td>
              <td style="border: none">770,000</td>
              <td style="border: none">114,000</td>
            </tr>
            <tr>
              <td style="border: none">Paraplegia (Grade A,B,C)</td>
              <td style="border: none">520,000</td>
              <td style="border: none">69,000</td>
            </tr>
            <tr>
              <td style="border: none">Any Grade D injury</td>
              <td style="border: none">350,000</td>
              <td style="border: none">42,000</td>
            </tr>
          </table>
        </li>
        
        <!--SLIDE 6-->
        <li class="carousels__slide">
          <p>For Australia, based on data form the Spinal Injury Network, National Disability Services (2010) 
             and a 2009 Access Economics report, Spinal Life Australia (www.spinal.com.au) depicted the huge economic 
             burden of spinal injury:</p>
          <table class="b">
            <tr>
              <td class="b2 words2">•</td>
              <td class="b2 words2">More than 12,000 people in Australia have a spinal cord injury;</td>
            </tr>
            <tr>
              <td class="b2 words2">•</td>
              <td class="b2 words2">The lifetime cost per incidence is estimated to be AUD 5 million for paraplegia
              and AUD 9.5 million for quadriplegia.</td>
            </tr>
            <tr>
              <td class="b2 words2">•</td>
              <td class="b2 words2">The annual cost to the Australian society was estimated at AUD 2 billion 
              per annum in 2009 by Access Economics.<br>       
            </td>
            </tr>
          </table>
          <br>
          <p>The annual economic cost is shared approximately as follows (Access Economics, 2009):</p>
          <table class="b">
            <tr>
              <td class="b2 words2">•</td>
              <td class="b2 words2">Government 55% (44% State Government and 11% Federal Government); individuals
              over 40% (viz. patients and their carers).</td>
            </table>
          </p>
          <p>It is expected that parts of these costs will be borne in the future by the NDIS.</p>
          <br>
          <p style="font-size:22px;text-align:center"><i><strong>This is the end of Module 1: Demographics and Economics of Spinal Cord Injury (SCI).
            <br> You may wish to read over the module content again, or you can begin the multiple-choice quiz by clicking the button above.
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

@endsection