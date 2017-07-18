@extends('layouts.masterLogin')

@section('title')
    {{--Module names needs to be taken out of database--}}
    Module 1: Demographics and Economics of Spinal Cord Injury (SCI)
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
    <!--THIS ALSO NEEDS TO BE TAKEN FROM DB-->
   <h2 style="color: white">Module 1: Demographics and Economics of Spinal Cord Injury (SCI)</h2>
@endsection

@section('content')
<div class="container-fluid"> 
    <br>
    
    <div class="col-md-7">
      <a href="{{ URL::to('/') }}/pdfs/Module_1_-_Demographics_&_Economics_of_SCI.pdf" 
      target="_blank" class="btn2 pdf">Download PDF</a>
    </div>
    <div class="col-md-5">
      <!--INCOMPLETE ROUTE, requires to take module ID-->
      <a href={{ route("module_quiz_info", array("id" => Auth::user()->id, "quizNo" => "Module 1")) }} ><button class="btn darkgrey2">Begin Quiz >></button></a>
    </div>
    <br><br><br>
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
          <p class="modh1">Facts and Figures for SCI</p>
          <p class="modh2">1 a) More demographics, less economics<br><br><u>You Are Not Alone</u><br></p>
         <table class="b">
            <tr>
              <td class="b2 words2">•</td>
              <td class="b2 words2">280,000-560,000 new cases are recorded every year across the world.</td>
            </tr>
            <tr>
              <td class="b2 words2">•</td>
              <td class="b2 words2">Number of men suffering from SCI is over twice the number of women.</td>
            </tr>
            <tr>
              <td class="b2 words2">•</td>
              <td class="b2 words2">Men between the ages of 20 to 29 years and ages above 70 years appear to be at the highest risk.</td>
            </tr>
            <tr>
              <td class="b2 words2">•</td>
              <td class="b2 words2">Women are observed to be at the highest risk between the ages of 15 to 30 years and at ages above 60 years.</td>
            </tr>
            <tr>
              <td class="b2 words2">•</td>
              <td class="b2 words2">More than 90% of the recorded cases are a result of traumatic injury</td>
            </tr>
            <tr>
              <td class="b2 words2">•</td>
              <td class="b2 words2">More than 12,000 people in Australia suffer from a spinal cord injury.</td>
            </tr>
         </table>
        </li>
        
        <!--SLIDE 2-->
        <li class="carousels__slide">
          <table>
            <tr>
              <td class="b2 words2">•</td>
              <td class="b2 words2" style="color: #B70014">The victims of spinal cord injury have a 2 to 5 times the normal mortality rate which is maximum during the first year following the injury.</td>
            </tr>
            <tr>
              <td class="b2 words2">•</td>
              <td class="b2 words2">The lifetime cost is estimated to be AUD 5 million per case of paraplegia and AUD 9.5 million per case of quadriplegia.</td>
            </tr>
            <tr>
              <td class="b2 words2">•</td>
              <td class="b2 words2">The economic burden of spinal cord injury on the Australian society was estimated at AUD 2 billion per annum in 2009 by Access Economics.</td>
            </tr>
          </table>
          <br>
          <p class="modh2">Economics of SCI treatment and management</p>
          <img class="diagram3" src="{{ URL::to('/') }}/images/Module1/mod1img1.png"
          alt="The costs are estimated as per US health care standards and are reflected in US Dollars."
          width="750px" height="250px" style="text-align: center"></img>
          <br><p style="text-align: center">The costs are estimated as per US health care standards and are reflected in US Dollars.</p>
        </li>
        
        <!--SLIDE 3-->
        <li class="carousels__slide words2">
          <div>
            <p class="modh2">Causes of Spinal Cord Injury</p>
            <br>
          </div>
          <div class="col-md-7 words2">
            <img class="diagram2" alt="National SCI Statistical Centre, US Fact Sheet 2016" 
            src="{{ URL::to('/') }}/images//Module1/mod1img2.png" height="450px"/><br>
            <p style="line-height:20px;text-align:center">National SCI Statistical Centre, US Fact Sheet 2016</p>
          </div>
          <div class="col-md-5">
            <table class="b">
                <tr>
                  <td class="b2 words3">•</td>
                  <td class="b2 words3">Trauma resulting from vehicular accidents, falls from heights, violence and sporting injuries cause over 90% of SCIs in total</td>
                </tr>
                <tr>
                  <td class="b2 words3">•</td>
                  <td class="b2 words3">In rare cases, infection of the cord or a cancerous tumour can also cause a SCI.</td>
                </tr>
                <tr>
                  <td class="b2 words3">•</td>
                  <td class="b2 words3">Problems related to blood vessels of the spinal cord may result in SCI as well.</td>
                </tr>
              </table>
          </div>
        </li>
        
        <!--SLIDE 4-->
        <li class="carousels__slide words2">
          <div class="col-md-5">
            <br>
            <table class="b">
              <tr>
                <td class="b2 words3">•</td>
                <td class="b2 words3">Over 58% people with SCI suffer from quadriplegia from which 45% of the people suffer from incomplete quadriplegia</td>
              </tr>
              <tr>
                <td class="b2 words3">•</td>
                <td class="b2 words3">Only 1 in 250 cases of SCI may show full recovery without any long lasting paralysis.</td>
              </tr>
            </table>
          </div>
          <div class="col-md-7 words2">
            <br>
            <img class="diagram2" alt="National SCI Statistical Centre, US Fact Sheet 2016" 
            src="{{ URL::to('/') }}/images//Module1/mod1img3.png" height="450px"/><br>
            <p style="line-height:20px;text-align:center">National SCI Statistical Centre, US Fact Sheet 2016</p>
          </div>
        </li>
        
        <!--SLIDE 5-->
        <li class="carousels__slide">
          <br>
          <p class="modh2">1 b) Recovery of function<br><br>
          The Status Quo</p>
          As of now, the recovery of function varies greatly with the extent of injury, the most severe cases show minimal to no recovery.
The best possible outcomes are seen when the patients receive prompt medical assistance and treatment. 
Surgery is very important to remove the debris and take the pressure off of the injured cord to prevent further damage to the cord. 
After the initial surgical treatment intensive physical therapy over an extended period tends to yield maximum functional recovery.
We already have many systems in place where assistive devices help the SCI patients stay mobile and active- as much as their condition allows
However, depression and substance abuse are significantly higher in people with SCI which usually leads to a poorer outcome. 

        </li>
        
        <!--SLIDE 6-->
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
        
        <!--SLIDE 7-->
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