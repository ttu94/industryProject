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
          <p>Testing</p>
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
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default panelOne" style="height: 500px">
                <h3 style="text-align: center">Clincal Trials</h3>
                <div class="panel-body" style="font-size:large;text-align:justify">
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra
                    varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt
                    condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis
                    nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor
                    accumsan. Aliquam in felis sit amet augue.<br>
                    
                    <a href="aboutUs"><button class="btns5 greenbluemedium">Read More</button></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default panelTwo" style="height: 500px">
                <h3 style="text-align:center; margin-left: 5px; margin-right: 5px">Educational Module Abstracts</h3>
                <div class="panel-body" style="font-size:large;text-align:justify">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra
                    varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt
                    condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis
                    nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor
                    accumsan. Aliquam in felis sit amet augue. <br>
                    
                    <a href="abstractModule"><button class="btns5 greenbluedark">Read More</button></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default panelThree" style="height: 500px">
                <h3 style="text-align:center">Register Now</h3>
                <div class="panel-body" style="font-size:large;text-align:justify">
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra
                    varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt
                    condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis
                    nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor
                    accumsan. Aliquam in felis sit amet augue.<br>
                    
                    <a href="register"><button class="btns5 greenbluedarker">Read More</button></a>
                </div>
            </div>
        </div>
    </div>
  
</div>
@endsection
