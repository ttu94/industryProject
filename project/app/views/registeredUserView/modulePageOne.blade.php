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
    <br>
    <div id="myCarousels" class="carousel slide" data-ride="carousel" data-interval="5000">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
    
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
      
          <div class="item active module_info" style="text-align: justify">                
            <h2>Spinal Cord</h2>
            <p>According to WHO data, the global incidence rate of spinal cord injuries is 40-80 cases per million population annually. 
            Which means there are 280,000-560,000 new cases of spinal cord injury recorded every year worldwide. 
            <br><br>
            Males are at least twice as likely to be the victims of spinal cord injury as compared to females.
            <br><br>
            The victims of spinal cord injury have a 2 to 5 times the normal mortality rate which is maximum during the first year following the injury. 
            Age distribution shows males between the ages of 20 to 29 years and ages above 70 years to be at the highest risk. 
            <br><br>
            Females are observed to be most vulnerable to spinal cord injury between the ages of 15 and 30 years and at ages above 60 years. 
            <br><br>
            The World Health Organization reports that more than 90% of the recorded cases are traumatic in origin.
            <br>
            </p>
            <div class="carousel-caption"></div>
          </div>
             
          <div class="item module_info" style="text-align: justify">
            <h2>shit</h2>
            <p>Males are at least twice as likely to be the victims of spinal cord injury as compared to females.
            <br><br>
            The victims of spinal cord injury have a 2 to 5 times the normal mortality rate which is maximum during the first year following the injury. 
            Age distribution shows males between the ages of 20 to 29 years and ages above 70 years to be at the highest risk. 
            <br><br>
            Females are observed to be most vulnerable to spinal cord injury between the ages of 15 and 30 years and at ages above 60 years. 
            <br><br>
            The World Health Organization reports that more than 90% of the recorded cases are traumatic in origin.
            <br>
            </p>
            <div class="carousel-caption"></div>
          </div>
         
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousels" role="button" data-slide="prev">
         <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousels" role="button" data-slide="next">
         <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
        </a>
    
    </div>
      
</div>

           
    
@endsection