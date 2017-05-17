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
    <div class="col-md-4" style="height:500px;background-color: #E6E6E6;box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.2), 0 2px 10px 0 rgba(0, 0, 0, 0.19);">
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
        
    <div class="col-md-8" style="height:500px;position:relative">
        <!--not sure what this will be of yet-->
        <img alt="Dr. Thuan Tu" src="http://www.austinclemens.com/Playfair/playfair_docs/assets/p1ex.png" style="width:100%;height:300px;" /> 
        <br>
        <br>
        <p class="basicFontStyle" style="margin-left:20px;margin-right:20px;text-align: justify;position:relative">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra
            varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt
            condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis
            nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor
            accumsan. Aliquam in felis sit amet augue.
        </p>
    </div>
    <div class="col-md-12" style="">
        <br><br><br>
        <div id="modulant">
			<div id="modulant-coverflow">
                <div class="panels panels-default panelsOne" style="width:325px;height:275px">
                    <br>
                    <h3 style="text-align: center">Module 1</h3>
                    <div class="panels-body">
                        <p class="moduleTitle">
                            Demographics & Economics of Spinal Cord Injury (SCI)
                        </p><br>
                        <a href={{ route("module_one", array("id" => Auth::user()->id)) }}><button class="btns6 greenbluemedium">Read More</button></a>
                    </div>
                    <br>
                </div>
                <div class="panels panels-default panelsTwo" style="width:325px;height:275px">
                    <br>
                    <h3 style="text-align: center">Module 2</h3>
                    <div class="panels-body">
                        <p class="moduleTitle">
                            Spinal cord as a neutral tissue and injury to the nerves
                        </p><br>
                        <a href="abstractModule"><button class="btns6 greenbluedark">Read More</button></a>
                    </div>
                    <br>
                </div>
                <div class="panels panels-default panelsOne" style="width:325px;height:275px">
                    <br>
                    <h3 style="text-align: center">Module 3</h3>
                    <div class="panels-body">
                        <p class="moduleTitle">
                            Structures
                        </p><br><br>
                        <a href="register"><button class="btns6 greenbluemedium" text-align: center >Read More</button></a>
                    </div>
                </div>
                <div class="panels panels-default panelsTwo" style="width:325px;height:275px">
                    <br>
                    <h3 style="text-align: center">Module 4</h3>
                    <div class="panels-body">
                        <p class="moduleTitle">
                            Functions
                        </p><br>
                        <a href="modulesOne"><button class="btns6 greenbluedark">Read More</button></a>
                    </div>
                    <br><br>
                </div>
				<div class="panels panels-default panelsOne" style="width:325px;height:275px">
                    <br>
                    <h3 style="text-align: center">Module 5</h3>
                    <div class="panels-body">
                        <p class="moduleTitle">
                            SCI mechanisms
                        </p><br>
                        <a href="aboutUs"><button class="btns6 greenbluemedium">Read More</button></a>
                    </div>
                    <br>
                </div>
                <div class="panels panels-default panelsTwo" style="width:325px;height:275px">
                    <br>
                    <h3 style="text-align: center">Module 6</h3>
                    <div class="panels-body">
                        <p class="moduleTitle">
                            Types of injuries
                        </p><br>
                        <a href="abstractModule"><button class="btns6 greenbluedark">Read More</button></a>
                    </div>
                    <br>
                </div>
                <div class="panels panels-default panelsOne" style="width:325px;height:275px">
                    <br>
                    <h3 style="text-align: center">Module 7</h3>
                    <div class="panels-body">
                        <p class="moduleTitle">
                            Different injuries and their effects on the cord and body
                        </p><br>
                        <a href="register"><button class="btns6 greenbluemedium" text-align: center >Read More</button></a>
                    </div>
                </div>
                <div class="panels panels-default panelsTwo" style="width:325px;height:275px">
                    <br>
                    <h3 style="text-align: center">Module 8</h3>
                    <div class="panels-body">
                        <p class="moduleTitle">
                            Chromic effects of spinal cord injury
                        </p><br>
                        <a href="modulesOne"><button class="btns6 greenbluedark">Read More</button></a>
                    </div>
                    <br><br>
                </div>
                <div class="panels panels-default panelsOne" style="width:325px;height:275px">
                    <br>
                    <h3 style="text-align: center">Module 9</h3>
                    <div class="panels-body">
                        <p class="moduleTitle">
                            Peripheral nerve regeneration
                        </p><br>
                        <a href="aboutUs"><button class="btns6 greenbluemedium">Read More</button></a>
                    </div>
                    <br>
                </div>
                <div class="panels panels-default panelsFour" style="width:325px;height:275px">
                    <br>
                    <h3 style="text-align: center">Module 10</h3>
                    <div class="panels-body">
                        <p class="moduleTitle">
                            CNS regeneration
                        </p><br>
                        <a href="abstractModule"><button class="btns6 greenbluedark">Read More</button></a>
                    </div>
                    <br>
                </div>
                <div class="panels panels-default panelsFive" style="width:325px;height:275px">
                    <br>
                    <h3 style="text-align: center">Module 11</h3>
                    <div class="panels-body">
                        <p class="moduleTitle">
                            Repair therapeutic strategies 
                        </p><br><br>
                        <a href="register"><button class="btns6 greenbluemedium" text-align: center >Read More</button></a>
                    </div>
                    <br>
                </div>
			</div>
			<div id="goto" style="text-align: center">
			    <br>
			    <button class="btns7 greenbluemedium" value="1">1</button>
			    <button class="btns7 greenbluemedium" value="2">2</button>
			    <button class="btns7 greenbluemedium" value="3">3</button>
			    <button class="btns7 greenbluemedium" value="4">4</button>
			    <button class="btns7 greenbluemedium" value="5">5</button>
			    <button class="btns7 greenbluemedium" value="6">6</button>
			    <button class="btns7 greenbluemedium" value="7">7</button>
			    <button class="btns7 greenbluemedium" value="8">8</button>
			    <button class="btns7 greenbluemedium" value="9">9</button>
			    <button class="btns7 greenbluemedium" value="10">10</button>
			    <button class="btns7 greenbluemedium" value="11">11</button>
			</div>
        </div>
    </div>
</div>
@endsection