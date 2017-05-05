@extends('layouts.homePageMaster')

@section('title')
	Clem Jones Spinal Injury Rehabilitation
@endsection

@section('content')
<div class="container-fluid">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="5000" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="http://i.imgur.com/K2FgPBx.jpg" alt="Spinal Cord">
        <div class="carousel-caption">
          <h3>Spinal Cord</h3>
          <p>Testing</p>
        </div>
      </div>

      <div class="item">
        <img src="https://images6.alphacoders.com/805/thumb-1920-805656.jpg" alt="Dr John St James">
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


<div>
  
    <br>
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default panelOne">
                <h3>&nbsp&nbspClincal Trials</h3>
                <div class="panel-body" style="font-size:large">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra
                    varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt
                    condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis
                    nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor
                    accumsan. Aliquam in felis sit amet augue.<br>
                    
                    <a href="aboutUs"><button class="panelOneButton">Read More</button></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default panelTwo">
                <h3>&nbsp&nbspEducational Abstract Modules</h3>
                <div class="panel-body" style="font-size:large">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra
                    varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt
                    condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis
                    nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor
                    accumsan. Aliquam in felis sit amet augue. <br>
                    
                    <a href="abstractModule"><button class="panelTwoButton">Read More</button></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default panelThree">
                <h3>&nbsp&nbspRegister Now</h3>
                <div class="panel-body" style="font-size:large">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra
                    varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt
                    condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis
                    nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor
                    accumsan. Aliquam in felis sit amet augue.<br>
                    
                    <a href="register"><button class="panelThreeButton">Read More</button></a>
                </div>
            </div>
        </div>
    </div>
  
</div>
@endsection
