@extends('layouts.masterLogin')

@section('title')
    {{-- USER NAME WILL NEED TO BE TAKEN OUT OF DB --}}
	Welcome 
    @if(Auth::check()) {{$user->firstName}}! 
	@endif
	
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
    <!--THIS ALSO NEEDS TO BE TAKEN FROM DB-->
    @if(Auth::check())
   <h2>Welcome,
   {{$user->firstName}}!
   </h2>
   @endif
@endsection

@section('content')
<div class="container-fluid basicFontStyle">
    <br>
    <div class="col-md-4" style="height:500px;background-color: #E6E6E6">
        <br>
        <div class="summaryOfTests" style="margin-top: 100px;vertical-align: middle">

            <p class="basicFontStyle" style="text-align:center"><strong>Summary of tests done</strong></p>
            <br>
            <p class="basicFontStyle" style="text-align:center">Last test completed:</p>
            
            <!--VALUE NEEDS TO BE DRAWN FROM DATABASE-->
            <h1 class="basicFontStyle" style="text-align:center"><strong>24/12/17</strong></h1>
            <br>
            <p class="basicFontStyle" style="text-align:center">Modules completed</p>
  
            <!--VALUE NEEDS TO BE DRAWN FROM DATABASE-->
            <h1 style=text-align:center>3/11</h1>
        </div>
    </div>
        
    <div class="col-md-8" style="height:500px">
        <!--not sure what this will be of yet-->
        <img alt="Dr. Thuan Tu" src="http://www.austinclemens.com/Playfair/playfair_docs/assets/p1ex.png" style="width:100%;height:300px;" /> 
        <br>
        <br>
        <p class="basicFontStyle" style="margin-left:20px;margin-right:20px;text-align: justify">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra
            varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt
            condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis
            nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor
            accumsan. Aliquam in felis sit amet augue.
        </p>
    </div>
    
    <div class="col-md-12">
        <br>
        
        <!--COVERFLOW GOES IN HERE -->
        <ul class="carousel my-carousel">
              <input type="radio" id="1" name="activator" checked="checked" class="carousel__activator"/>
              <input type="radio" id="2" name="activator" class="carousel__activator"/>
              <input type="radio" id="3" name="activator" class="carousel__activator"/>
              <input type="radio" id="4" name="activator" class="carousel__activator"/>
              <input type="radio" id="5" name="activator" class="carousel__activator"/>
              <div class="carousel__controls">
                <label for="2" class="carousel__control carousel__control--backward"></label>
                <label for="5" class="carousel__control carousel__control--forward"></label>
              </div>
              <div class="carousel__controls">
                <label for="3" class="carousel__control carousel__control--backward"></label>
                <label for="1" class="carousel__control carousel__control--forward"></label>
              </div>
              <div class="carousel__controls">
                <label for="4" class="carousel__control carousel__control--backward"></label>
                <label for="2" class="carousel__control carousel__control--forward"></label>
              </div>
              <div class="carousel__controls">
                <label for="5" class="carousel__control carousel__control--backward"></label>
                <label for="3" class="carousel__control carousel__control--forward"></label>
              </div>
              <div class="carousel__controls">
                <label for="1" class="carousel__control carousel__control--backward"></label>
                <label for="4" class="carousel__control carousel__control--forward"></label>
              </div>
              <li class="carousel__slide">
                <p>According to WHO data, the global incidence rate of spinal cord injuries is 40-80 cases per million population annually.
                <br>
                Which means there are 280,000-560,000 new cases of spinal cord injury recorded every year worldwide. 
                <br><br>
                Males are at least twice as likely to be the victims of spinal cord injury as compared to females.
                <br><br>
                The victims of spinal cord injury have a 2 to 5 times the normal mortality rate which is maximum during the first year following the injury. 
                <br>
                Age distribution shows males between the ages of 20 to 29 years and ages above 70 years to be at the highest risk. 
                <br><br>
                Females are observed to be most vulnerable to spinal cord injury between the ages of 15 and 30 years and at ages above 60 years. 
                <br><br>
                The World Health Organization reports that more than 90% of the recorded cases are traumatic in origin.
                <br>
                </p>
              </li>
              <li class="carousel__slide">
                <p>The National Spinal Cord Injury Statistical Centre USA reports etiological and clinical injury distributions in its 2016 Fact Sheet.<br><br> 
                According to the fact sheet, 38% cases are due to vehicular accidents, 30.5% result from falls, 
                13.5% are victims of violence, 9% are as a result of sports injuries, 
                5% result due to medical reasons including iatrogenic causes and 4% are attributed
                to reasons other than listed here.<br>
                Out of all cases, 45% suffer from incomplete quadriplegia, 13.3% from complete quadriplegia, 
                21.3% have an incomplete paraplegia and 20% have complete paraplegia. <br><br>
                Only in 0.4% cases, the victims of spinal cord injury experience recovery without any neurological deficit or residual paralysis. <br><br>
                Out of all spinal cord injury cases, an overwhelming 58.3% victims suffer from some 
                form of quadriplegia implying an injury to the cervical spinal cord segments. 
                </p>
              </li>
              <li class="carousel__slide">
                <h1>3</h1>
              </li>
              <li class="carousel__slide">
                <h1>4</h1>
              </li>
              <li class="carousel__slide">
                <h1>5</h1>
              </li>
              <div class="carousel__indicators">
                <label for="1" class="carousel__indicator"></label>
                <label for="2" class="carousel__indicator"></label>
                <label for="3" class="carousel__indicator"></label>
                <label for="4" class="carousel__indicator"></label>
                <label for="5" class="carousel__indicator"></label>
              </div>
        </ul>
    </div>
    
</div>
@endsection