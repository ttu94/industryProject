@extends('layouts.homePageMaster')

@section('title')
	Clem Jones Spinal Injury Rehabilitation
@endsection

@section('content')
  <div class="container-fluid">
    <div class="col-md-12 col-xs-12">
      <br>
      <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="7000" style="box-shadow: 10px 10px 5px #888888">
          <!-- Indicators -->
          <ol class="carousel-indicators" >
            <li data-target="#myCarousel" data-slide-to="0" class="active" ></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="images/Home/hom_img5.png" alt="Dr John St James">
              <div class="carousel-caption">
              </div>
            </div>
            <div class="item">
              <img src="images/Home/hom_img4.png" alt="Spinal Cord">
              <div class="carousel-caption">
                <!--<h3>Dr James St John</h3>-->
                <!--<p>test</p>-->
              </div>
            </div>
            <div class="item">
              <img src="images/Home/hom_img1.png" alt="SCI">
              <div class="carousel-caption">
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
      <br><br>
      <div class="row">
          <div class="col-md-4">
              <div class="panel panel-default panelOne" style="height: auto; min-height: 450px">
                  <h3 style="text-align: center">Clincal Trials</h3>
                  <div class="panel-body" style="font-size:19px;text-align:justify; position: relative; padding-bottom: 100px">
                      <br>
                      With the support of the Motor Accident Insurance Commission, the Perry Cross Spinal Research Foundation and the Clem Jones Foundation, 
                      we are conducting pre-clinical research for a cell transplantation therapy to repair the injured spinal cord which we hope will lead to a 
                      Phase I/IIa clinical trial within a few years.
                  </div>
                  <a href="aboutUs"><button class="btns5 darkgrey2">Read More</button></a>
              </div>
          </div>
          <div class="col-md-4">
              <div class="panel panel-default panelTwo" style="height: auto; min-height: 450px">
                  <h3 style="text-align:center; margin-left: 5px; margin-right: 5px">Educational Module Abstracts</h3>
                  <div class="panel-body" style="font-size:19px;text-align:justify; position: relative; padding-bottom: 100px">
                      <br>
                      The educational module abstracts will provide you with a brief summary on each of the 11 modules regarding the spinal cord and the injuries that are associated.
                      <br>
                      <br>
                      Topics range from the demographics and economics, functionality, types of injuries and repair therapeutic strategies of the spinal cord.
                  </div>
                  <a href="abstractModule"><button class="btns5 darkgrey2">Read More</button></a>
              </div>
          </div>
          <div class="col-md-4">
              <div class="panel panel-default panelThree" style="height: 450px">
                  <h3 style="text-align:center">Register Now</h3>
                  <div class="panel-body" style="font-size:19px;text-align:justify; position: relative; padding-bottom: 100px">
                      <br>
                      Register now and gain full access to all the resources such as the full educational module content and online quizzes 
                      that will test your knowledge.
                      <br>
                      <br>
                      It's free and will only take a minute!
                  </div>
                  <a href="register"><button class="btns5 darkgrey2">Register Now!</button></a>
              </div>
          </div>
      </div>
    </div>
  </div>

  <div class="redBarHome">
    <h3>Our partners:</h3>
  </div>
  <div class="container-fluid" style="margin-bottom:60px">
      <!--LOGOS OF PARTNERS--> 
      <br>
      <div class="col-md-12 col-xs-12 logo_area" style="text-align:center">
        <br>
        <img alt="Griffith Institute for Drug Discovery logo" src="images/Home/GriffithDrug.png" style="height:120px"/>  
        <img alt="Griffith University logo" src="images/Home/GriffithUni.png" style="height:120px"/> 
        <img alt="Menzies: Health Insitute Queensland logo" src="images/Home/Menzies.png" style="height:120px"/>
        <img alt="Australian Research Council logo" src="images/Home/AustralianGov.png" style="height:120px"/>
        <br><br>
        <img alt="Clem Jones Centre for Neurobiology and Stem Cell Research logo" src="images/Home/ClemJones.png" style="height:120px"/>
        <img alt="Princess Alexandra Hospital logo" src="images/Home/PrincessA.png" style="height:120px"/>
        <img alt="Making Strides logo" src="images/Home/Strides.png" style="height:120px"/>
        <img alt="MAiC: Motor Accident Insurance Commission logo" src="images/Home/MAiC.png" style="height:120px"/> 
        <br><br>
        <img alt="Gold Coast University Hospital logo" src="images/Home/GoldCoast.png" style="width:450px"/>
        <img alt="Perry Cross Spinal Research Foundation logo" src="images/Home/Perry.png" style="height:120px"/>
      </div>
  </div>
@endsection
