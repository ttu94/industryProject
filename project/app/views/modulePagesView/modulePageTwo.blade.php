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
          <p class="modh1">KEY FACTS ABOUT: Spinal Cord Injuries (SCI)</p>
         <table class="b">
            <tr>
              <td class="b2 words2">•</td>
              <td class="b2 words2"><strong>According to WHO data,</strong> the global incidence rate of spinal cord injuries is <u>40-80 cases per million population</u> annually.</td>
            </tr>
            <tr>
              <td class="b2 words2">•</td>
              <td class="b2 words2">There are <u>280,000-560,000 new cases</u> of spinal cord injury recorded every year worldwide.</td>
            </tr>
         </table>
         <br>
         <p class="modh2">⤘ Demographics</p>
         <table>
            <tr>
              <td class="b2 words2">•</td>
              <td class="b2 words2">Males are at least twice as likely to be the victims of spinal cord injury as compared to females.</td>
            </tr>
            <tr>
              <td class="b2 words2">•</td>
              <td class="b2 words2">The victims of spinal cord injury have a 2 to 5 times the normal mortality rate, which is maximum during the first year following the injury.</td>
            </tr>
            <tr>
              <td class="b2 words2">•</td>
              <td class="b2">Age distribution shows males between the ages of 20 to 29 years and ages above 70 years to be at the highest risk.</td>
            </tr>
            <tr>
              <td class="b2 words2">•</td>
              <td class="b2 words2">Females are observed to be most vulnerable to spinal cord injury between the ages of 15 and 30 years and at ages above 60 years.</td>
            </tr>
            <tr>
              <td class="b2 words2">•</td>
              <td class="b2 words2"><strong>The World Health Organization</strong> reports that more than 90% of the recorded cases are traumatic in origin.</td>
            </tr>
          </table>
          </p>
        </li>
        
        <!--SLIDE 2-->
        <li class="carousels__slide">
          <p class="modh2">⤘ Statistics and clinical data</p>
          <p class="words2"><strong>The National Spinal Cord Injury Statistical Centre USA</strong> reports etiological and clinical injury distributions in its 2016 Fact Sheet.
            <br><br>
            <div class="col-md-7">
              <img class="diagram" alt="Figure 1: Etiological distrubution as per the data collected in 2016" src="{{ URL::to('/') }}/images/Mod1.1.png" height="290px"/>
              <br><p class="diagramLabel"><u><strong>Figure 1:</strong> Etiological distrubution as per the data collected in 2016</u></p>
            </div>
            <div class="col-md-5">
              <p>According to the fact sheet and <strong>Figure 1:</strong></p>
              <table class="b">
                <tr>
                  <td class="b2 words3">-</td>
                  <td class="b2 words3">38% cases are due to vehicular accidents,</td>
                </tr>
                <tr>
                  <td class="b2 words3">-</td>
                  <td class="b2 words3">30.5% result from falls,</td>
                </tr>
                <tr>
                  <td class="b2 words3">-</td>
                  <td class="b2 words3">13.5% are victims of violence,</td>
                </tr>
                <tr>
                  <td class="b2 words3">-</td>
                  <td class="b2 words3">9% are as a result of sports injuries,</td>
                </tr>
                <tr>
                  <td class="b2 words3">-</td>
                  <td class="b2 words3">5% result due to medical reasons including iatrogenic causes and,</td>
                </tr>
                <tr>
                  <td class="b2 words3">-</td>
                  <td class="b2 words3">4% are attributed to reasons other than listed here.</td>
                </tr>
              </table>
            </div>
          </p>
        </li>
        
        <!--SLIDE 3-->
        <li class="carousels__slide words2">
          <div class="col-md-5 words2"><br>
            <p>Out of all cases, 45% suffer from incomplete quadriplegia, 13.3% from complete quadriplegia, 
               21.3% have an incomplete paraplegia and 20% have complete paraplegia.</p>
            <p>Only in 0.4% cases, the victims of spinal cord injury experience recovery without any neurological deficit or residual paralysis.</p>
          </div>
          <div class="col-md-7">
            <img class="diagram2" alt="Figure: Extent of Spinal Cord Injury as per the data collected in 2016" 
            src="{{ URL::to('/') }}/images/Mod1.2.png" height="290px"/><br>
            <p style="line-height:20px;text-align:center"><u><strong>Figure 2:</strong> Extent of Spinal Cord Injury as per the data collected in 2016</u></p>
          </div>
          <br><br>
          <div class="col-md-12 words2">
            <p>Out of all spinal cord injury cases, an overwhelming 58.3% victims suffer from some 
               form of quadriplegia implying an injury to the cervical spinal cord segments.</p>
            <p>The relatively delicate structure of cervical vertebrae, their vulnerable location in the neck and 
               the fact that they carry and transmit the weight of the entire head makes the cervical vertebrae more prone to fracture or 
               dislocation upon injury, damaging the cervical spinal cord in turn.</p>
          </div>
        </li>
        
        <!--SLIDE 4-->
        <li class="carousels__slide">
          <br>
          <p class="modh2">⤘ Economic consequences</p>
          <p>SCI treatments put a significant economic burden on the health care system.<br><br>
             For an injury with ASIA score of A, B or C at level C1-C4, cost for the first 
             year is over 1 million US Dollars with 185,000 USD each following year per patient.<br><br>
             If a patient suffers from an injury with ASIA scores A, B or C at C5-C8 levels, 
             the average cost is 770,000 USD for the first year and 114,000 USD each following year.<br><br>
             For injuries with ASIA scores A, B or C below this level, 
             the expected first year cost is 520,000 USD and 69,000 USD every following year.<br><br>
             For any Grade D injury, the expected cost is 350,000 and 42,000 
             USD for the first year and every following year respectively.</p>
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
      <div class="basicFontStyle" style="width: 50%; margin: 0 auto;">
        <br><br>
        <p style="text-align:center">Testing video</p>
        <iframe align="middle" width="780" height="415"
          src="https://www.youtube.com/embed/-Z4jx5VMw8M" frameborder="0" allowfullscreen>
        </iframe> 
      </div>
    </div>

</div>

@endsection