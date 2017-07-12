@extends('layouts.homePageMaster')

@section('title')
	Clem Jones Spinal Injury Rehabilitation
@endsection

@section('content')
<!--<div class="container-fluid">-->
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="5000" style="box-shadow: 10px 10px 5px #888888">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="http://i.imgur.com/K2FgPBx.jpg" alt="Spinal Cord" style="height: 750px">
        <div class="carousel-caption">
          <h3>Spinal Cord</h3>

        </div>
      </div>

      <div class="item">
        <img src="https://images6.alphacoders.com/805/thumb-1920-805656.jpg" alt="Dr John St James" style="height: 750px">
        <div class="carousel-caption">
          <h3>Dr James St John</h3>
          <p>test</p>
        </div>
      </div>
    
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


<!--<div>-->
  <div class="container-fluid">
    <br>
    <br>
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default panelOne" style="height: 450px">
                <h3 style="text-align: center">Clincal Trials</h3>
                <div class="panel-body" style="font-size:19px;text-align:justify">
                    <br>
                    With the support of the Motor Accident Insurance Commission, the Perry Cross Spinal Research Foundation and the Clem Jones Foundation, 
                    we are conducting pre-clinical research for a cell transplantation herapy to repair the injured spinal cord which we hope will lead to a 
                    Phase I/IIa clinical trial within a few years.

                    <br>
                    <br>
                    To learn more about this process please click "Read More" below.
                    <a href="aboutUs"><button class="btns5 greenbluemedium">Read More</button></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default panelTwo" style="height: 450px">
                <h3 style="text-align:center; margin-left: 5px; margin-right: 5px">Educational Module Abstracts</h3>
                <div class="panel-body" style="font-size:19px;text-align:justify">
                    <br>
                    The educational module abstracts will provide you with a brief summary on each of the 11 modules regarding the spinal cord and the injuries that are associated.
                    <br>
                    <br>
                    Topics range from the demographics and economics, functionality, types of injuries and repair therapeutic strategies of the spinal cord.
                    <a href="abstractModule"><button class="btns5 greenbluedark">Read More</button></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default panelThree" style="height: 450px">
                <h3 style="text-align:center">Register Now</h3>
                <div class="panel-body" style="font-size:19px;text-align:justify">
                    <br>
                    Register now and gain full access to all the resources such as the full educational module content and online quizzes 
                    that will test your knowledge.
                    <br>
                    <br>
                    It's free and will only take a minute!
                    <a href="register"><button class="btns5 greenbluedarker">Register Now!</button></a>
                </div>
            </div>
        </div>
    </div>
  
</div>
@endsection
