@extends('layouts.masterLogin')

@section('title')
    {{--Module names needs to be taken out of database--}}
    Module 1: Demographics and Economics of Spinal Cord Injury (SCI)
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
    <!--THIS ALSO NEEDS TO BE TAKEN FROM DB-->
   <h2>Module 1: Demographics and Economics of Spinal Cord Injury (SCI)</h2>
@endsection

@section('content')
<div class="container-fluid"> 
    <!--background-image: url("https://dssofgcsc.files.wordpress.com/2010/07/spine.jpg")-->
    <br>
    <div class="col-md-6">
      <button class="btn2 whitebrown">Print</button>
    </div>
    <div class="col-md-6">
      <button class="btn whitebrown">Begin Quiz >></button>
      <br><br>
    </div>

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
      
      <li class="carousels__slide">
        <p class="modh1">KEY FACTS</p>
       <br>
       <table class="b">
          <tr>
            <td class="b3" style="font-size:40px">•</td>
            <td class="b2">According to WHO data, the global incidence rate of spinal cord injuries is 40-80 cases per million population annually.</td>
          </tr>
          <tr>
            <td class="b2" style="font-size:40px">•</td>
            <td class="b2">Which means there are 280,000-560,000 new cases of spinal cord injury recorded every year worldwide.</td>
          </tr>
          <tr>
            <td class="b2" style="font-size:40px">•</td>
            <td class="b2">Males are at least twice as likely to be the victims of spinal cord injury as compared to females.</td>
          </tr>
          <tr>
            <td class="b2" style="font-size:40px">•</td>
            <td class="b2">The victims of spinal cord injury have a 2 to 5 times the normal mortality rate which is maximum during the first year following the injury.</td>
          </tr>
        </table>
        <!--<p class="circle">According to WHO data, the global incidence rate of spinal cord injuries is 40-80 cases per million population annually.<br>-->
        <!--Which means there are 280,000-560,000 new cases of spinal cord injury recorded every year worldwide. <br><br>-->
        <!--Males are at least twice as likely to be the victims of spinal cord injury as compared to females.<br><br>-->
        <!--The victims of spinal cord injury have a 2 to 5 times the normal mortality rate which is maximum during the first year following the injury. <br>-->
        <!--Age distribution shows males between the ages of 20 to 29 years and ages above 70 years to be at the highest risk. <br><br>-->
        <!--Females are observed to be most vulnerable to spinal cord injury between the ages of 15 and 30 years and at ages above 60 years. <br><br>-->
        <!--The World Health Organization reports that more than 90% of the recorded cases are traumatic in origin.<br>-->
        <!--</p>-->
      </li>
      <li class="carousels__slide">
        <p>The National Spinal Cord Injury Statistical Centre USA reports etiological and clinical injury distributions in its 2016 Fact Sheet.<br><br> 
        According to the fact sheet, 38% cases are due to vehicular accidents, 30.5% result from falls, 
        13.5% are victims of violence, 9% are as a result of sports injuries, 
        5% result due to medical reasons including iatrogenic causes and 4% are attributed to reasons other than listed here.<br>
        Out of all cases, 45% suffer from incomplete quadriplegia, 13.3% from complete quadriplegia, 
        21.3% have an incomplete paraplegia and 20% have complete paraplegia. <br><br>
        Only in 0.4% cases, the victims of spinal cord injury experience recovery without any neurological deficit or residual paralysis. <br><br>
        Out of all spinal cord injury cases, an overwhelming 58.3% victims suffer from some 
        form of quadriplegia implying an injury to the cervical spinal cord segments. 
        </p>
      </li>
      <li class="carousels__slide">
        <img class="logo" alt="Figure: Etiological distrubution (Left) and extent of Spinal Cord Injury (Right) 2016" 
        src="{{ URL::to('/') }}/images/Mod1diagram.png" height="300px" width="1000px"/>                
        <p>Figure: Etiological distrubution (Left) and Extent of Spinal Cord Injury (right) as per the data collected in 2016</p>
      </li>
      <li class="carousels__slide">
        The treatment also puts significant economic burden on the health care system. 
        For an injury with ASIA score of A, B or C at level C1-C4, cost for the first year is over 1 million US Dollars with 
        185,000 USD each following year per patient. 
        If a patient suffers from an injury with ASIA scores A, B or C at C5-C8 levels, the average cost is 770,000 USD 
        for the first year and 114,000 USD each following year. 
        For injuries with ASIA scores A, B or C below this level, the expected first year cost is 520,000 USD and 69,000 USD every following year. 
        For any Grade D injury, the expected cost is 350,000 and 42,000 USD for the first year and every following year respectively. 
        In addition to these costs, the patients suffer from loss of wages, loss of productivity, dependence on others 
        for their physical needs and a number of secondary conditions requiring further medical assistance 
        which adds to the economic burden mentioned here. 
      </li>
      <li class="carousels__slide">
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
        <p>Table: Estimated costs for treatment of Spinal Cord Injuries at different levels, 
           as given by National Spinal Cord Injury Statistical Centre, US.
        </p>
        <br>
          <p>For Australia, based on data form the Spinal Injury Network, National Disability Services (2010) 
            and a 2009 Access Economics report, Spinal Life Australia (www.spinal.com.au) depicted the huge economic 
            burden of spinal injury:<br>
            • &nbspMore than 12,000 people in Australia have a spinal cord injury;<br>
            • &nbspThe lifetime cost per incidence is estimated to be AUD 5 million for paraplegia and AUD 9.5 million for <br> 
            &nbsp&nbsp&nbsp&nbspquadriplegia.<br>
            • &nbspThe annual cost to the Australian society was estimated at AUD 2 billion per annum in 2009 by Access Economics.<br>       
          </p>
        
      </li>
      
      <li class="carousels__slide">
        <p>The annual economic cost is shared approximately as follows (Access Economics, 2009): 
        Government 55% (44% State Government and 11% Federal Government); individuals over 40% (viz. patients and their carers).  
        It is expected that parts of these costs will be borne in the future by the NDIS.
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