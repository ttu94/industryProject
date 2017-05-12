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
      <button class="btn2 greenbluemedium2">Print</button>
    </div>
    <div class="col-md-6">
      <button class="btn greenbluelight">Begin Quiz >></button>
      <br><br>
    </div>
    
    
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
        <p>According to WHO data, the global incidence rate of spinal cord injuries is 40-80 cases per million population annually.<br>
        Which means there are 280,000-560,000 new cases of spinal cord injury recorded every year worldwide. <br><br>
        Males are at least twice as likely to be the victims of spinal cord injury as compared to females.<br><br>
        The victims of spinal cord injury have a 2 to 5 times the normal mortality rate which is maximum during the first year following the injury. <br>
        Age distribution shows males between the ages of 20 to 29 years and ages above 70 years to be at the highest risk. <br><br>
        Females are observed to be most vulnerable to spinal cord injury between the ages of 15 and 30 years and at ages above 60 years. <br><br>
        The World Health Organization reports that more than 90% of the recorded cases are traumatic in origin.<br>
        </p>
      </li>
      <li class="carousel__slide">
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

           
    
@endsection