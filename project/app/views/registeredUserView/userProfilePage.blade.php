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
    <div class="col-md-4">
        <br>
        <div class="summaryOfTests"  style="background-color: #E6E6E6; height:500px">
            <br>
            <br>
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
        <br>
        <img alt="Dr. Thuan Tu" src="http://www.austinclemens.com/Playfair/playfair_docs/assets/p1ex.png" style="width:100%;height:300px;" /> 
        <br>
        <br>
        <p class="basicFontStyle" style="justify;margin-left:20px;margin-right:20px">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra
            varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt
            condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis
            nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor
            accumsan. Aliquam in felis sit amet augue.
        </p>
    
    </div>
        <!--<table class="testborder">-->
        <!--    <tr>-->
        <!--        <td rowspan="2">-->
                    <!--<div class="summaryBox" style="display:table">-->
                    <!--    <div class="" style="display: table-cell;vertical-align:middle">-->
                    <!--        <h2 class="middleAlign" style="padding-top:30px">Summary of tests done</h2>-->
                    <!--        <br>-->
                    <!--        <p class="middleAlign">Last test completed:</p>-->
                    <!--        The last test link should be here-->
                    <!--        <br>-->
                    <!--        <p class="middleAlign">Modules completed</p>-->
                    <!--        Should have the number of modules completed here-->
                    <!--    </div>-->
                    <!--</div>-->
        <!--        </td>-->
        <!--        <td><img style="margin:auto;display:block; width: 500px; height: 500px"></td>-->
        <!--    </tr>-->
        <!--    <tr>-->
        <!--        <td style="text-align:center;">text under here</td>-->
        <!--    </tr>-->
        <!--</table>-->
        <div class="col-md-12">

        </div>

		
        <!--<div class="summaryBox">-->
        <!--    <div class="testborder" style="vertical-align:middle">-->
        <!--        <h2 class="middleAlign" style="padding-top:30px">Summary of tests done</h2>-->
        <!--        <br>-->
        <!--        <p class="middleAlign">Last test completed:</p>-->
                <!--The last test link should be here-->
        <!--        <br>-->
        <!--        <p class="middleAlign">Modules completed</p>-->
                <!--Should have the number of modules completed here-->
                
        <!--    </div>-->
        <!--</div>-->
        <!--<div class="testborder" style="width:100%: height:200px">-->
        <!--    <table>-->
        <!--        <tr>-->
        <!--            <td><img style="width: 500px; height: 500px"></td>-->
        <!--        </tr>-->
        <!--        <tr>-->
        <!--            <td style="text-align: center">-->
        <!--                text under here-->
        <!--            </td>-->
        <!--        </tr>-->
        <!--    </table>-->
        <!--</div>-->
        
        <!--<div class="coverflow">-->
        <!--    <div class="cover"><img src="images/griffith_logo.png"></div>-->
        <!--    <div class="cover"><img src="images/griffith_logo.png"></div>-->
        <!--    <div class="cover"><img src="images/griffith_logo.png"></div>-->
        <!--    <div class="cover"><img src="images/griffith_logo.png"></div>-->
        <!--    <div class="cover"><img src="images/griffith_logo.png"></div>-->
        <!--</div>-->

</div>
@endsection