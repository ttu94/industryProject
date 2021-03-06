@extends('layouts.masterLogin')

@section('title')
    {{-- USER NAME WILL NEED TO BE TAKEN OUT OF DB --}}
	Welcome 
    @if(Auth::check()) {{$user->firstName}}! 
	@endif
	
@endsection

@section('pageTitle')
    @if(Auth::check())
   <h2 style="color:white">Welcome, {{$user->firstName}}!</h2>
   @endif
@endsection

@section('content')
<?php 
    function datesplit($date){
        if($date == "Not Completed" || $date == ""){ return "Not Completed"; } else {
            $split = explode(" ",$date);
            $day = explode("-",$split[0]);
            $time = explode(":",$split[1]);
            if($time[0] > 12){
                $t = ($time[0] - 12)." ".$time[1]." PM";
            } else {
                $t = $time[0].":".$time[1]." AM";
            }
            $d = $day[2]."/".$day[1]."/".$day[0]."&nbsp &nbsp".$t;
            // $d = "asdfasdf";
            return $d;
        }
    }
?>
<div class="container-fluid basicFontStyle">
    <br>
    <div class="col-md-12 userprof_area">
        <br>
        <div class="col-md-4" style="padding-top:40px;padding-bottom:40px;background-color:#D5E1EE;box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.2), 0 2px 10px 0 rgba(0, 0, 0, 0.19);">
            <div class="summaryOfTests" style="">
                <p class="basicFontStyle" style="text-align:center"><strong>Summary of tests done</strong></p>
                <br>
                <p class="basicFontStyle" style="text-align:center">Last test completed:</p>
                <!--Value passed from user result table-->
                <h1 class="basicFontStyle" style="text-align:center"><strong> {{ datesplit($passLatest) }} </strong></h1>
                <br>
                <p class="basicFontStyle" style="text-align:center">Modules completed</p>
                <!--Value passed from user result table-->
                <h1 style=text-align:center> {{ $passCount }} / 11 </h1>
            </div>
        </div>
 
        <div class="col-md-8" style="height:350px;position:relative">
            <br>
            <h3 class="text1" style="text-align:center;background-color:#FDF7EF">Below you can find the modules tailored according to your level of understanding for each module.
            <br><br> The modules that you were more confident in are pushed to the end, whereas the ones you are less confident are at the start.
            <br><br> We recommend that you start with the order presented to you, but you are free to complete the modules in any order.
            <br><br> Good luck!</h3> 
        </div>
        <div class="col-md-12" id="modulant">
            <br><br>
			<div id="modulant-coverflow">
                <div id="dv_{{$user->m1}}" class="panels panels-default panelsOne" style="width:325px;height:275px">
                    <br>
                    <h3 style="text-align: center">Module 1</h3>
                    <div class="panels-body">
                        <p class="moduleTitle">
                            Demographics & Economics of Spinal Cord Injury (SCI)
                        </p>
                        <a href={{ route("module_one", array("id" => Auth::user()->id)) }}><button class="btns6 darkgrey2">Read More</button></a>
                    </div>
                </div>
                <div id="dv_{{$user->m2}}" class="panels panels-default panelsTwo" style="width:325px;height:275px">
                    <br>
                    <h3 style="text-align: center">Module 2</h3>
                    <div class="panels-body">
                        <p class="moduleTitle">
                            Spinal cord as a neutral tissue and injury to the nerves
                        </p>
                        <a href="{{ route("module_two", array("id" => Auth::user()->id)) }}"><button class="btns6 darkgrey2">Read More</button></a>
                    </div>
                </div>
                <div id="dv_{{$user->m3}}" class="panels panels-default panelsOne" style="width:325px;height:275px">
                    <br>
                    <h3 style="text-align: center">Module 3</h3>
                    <div class="panels-body">
                        <p class="moduleTitle">
                            Structures
                        </p>
                        <a href="{{ route("module_three", array("id" => Auth::user()->id)) }}"><button class="btns6 darkgrey2" text-align: center >Read More</button></a>
                    </div>
                </div>
                <div id="dv_{{$user->m4}}" class="panels panels-default panelsTwo" style="width:325px;height:275px">
                    <br>
                    <h3 style="text-align: center">Module 4</h3>
                    <div class="panels-body">
                        <p class="moduleTitle">
                            Functions
                        </p>
                        <a href="{{ route("module_four", array("id" => Auth::user()->id)) }}"><button class="btns6 darkgrey2">Read More</button></a>
                    </div>
                </div>
				<div id="dv_{{$user->m5}}" class="panels panels-default panelsOne" style="width:325px;height:275px">
                    <br>
                    <h3 style="text-align: center">Module 5</h3>
                    <div class="panels-body">
                        <p class="moduleTitle">
                            SCI mechanisms
                        </p>
                        <a href="{{ route("module_five", array("id" => Auth::user()->id)) }}"><button class="btns6 darkgrey2">Read More</button></a>
                    </div>
                </div>
                <div id="dv_{{$user->m6}}" class="panels panels-default panelsTwo" style="width:325px;height:275px">
                    <br>
                    <h3 style="text-align: center">Module 6</h3>
                    <div class="panels-body">
                        <p class="moduleTitle">
                            Types of injuries
                        </p>
                        <a href="{{ route("module_six", array("id" => Auth::user()->id)) }}"><button class="btns6 darkgrey2">Read More</button></a>
                    </div>
                </div>
                <div id="dv_{{$user->m7}}" class="panels panels-default panelsOne" style="width:325px;height:275px">
                    <br>
                    <h3 style="text-align: center">Module 7</h3>
                    <div class="panels-body">
                        <p class="moduleTitle">
                            Different injuries and their effects on the cord and body
                        </p>
                        <button class="btns darkgrey2" style="width:50%;left:26%">Coming Soon</button>
                        <!--<a href="register"><button class="btns6 darkgrey2" text-align: center >Read More</button></a>-->
                    </div>
                </div>
                <div id="dv_{{$user->m8}}" class="panels panels-default panelsTwo" style="width:325px;height:275px">
                    <br>
                    <h3 style="text-align: center">Module 8</h3>
                    <div class="panels-body">
                        <p class="moduleTitle">
                            Chromic effects of spinal cord injury
                        </p>
                        <button class="btns darkgrey2" style="width:50%;left:26%">Coming Soon</button>
                        <!--<a href="modulesOne"><button class="btns6 darkgrey2">Read More</button></a>-->
                    </div>
                </div>
                <div id="dv_{{$user->m9}}" class="panels panels-default panelsOne" style="width:325px;height:275px">
                    <br>
                    <h3 style="text-align: center">Module 9</h3>
                    <div class="panels-body">
                        <p class="moduleTitle">
                            Peripheral nerve regeneration
                        </p>
                        <button class="btns darkgrey2" style="width:50%;left:26%">Coming Soon</button>
                        <!--<a href="aboutUs"><button class="btns6 darkgrey2">Read More</button></a>-->
                    </div>
                </div>
                <div id="dv_{{$user->m10}}" class="panels panels-default panelsTwo" style="width:325px;height:275px">
                    <br>
                    <h3 style="text-align: center">Module 10</h3>
                    <div class="panels-body">
                        <p class="moduleTitle">
                            CNS regeneration
                        </p>
                        <button class="btns darkgrey2" style="width:50%;left:26%">Coming Soon</button>
                        <!--<a href="abstractModule"><button class="btns6 darkgrey2">Read More</button></a>-->
                    </div>
                </div>
                <div id="dv_{{$user->m11}}" class="panels panels-default panelsOne" style="width:325px;height:275px">
                    <br>
                    <h3 style="text-align: center">Module 11</h3>
                    <div class="panels-body">
                        <p class="moduleTitle">
                            Repair therapeutic strategies 
                        </p>
                        <a href="{{ route("module_eleven", array("id" => Auth::user()->id)) }}"><button class="btns6 darkgrey2" text-align: center >Read More</button></a>
                    </div>
                </div>
			</div>
			<div id="goto" style="text-align: center">
			    <br>
			    <button class="btns7 darkgrey" value="1">1</button>
			    <button class="btns7 darkgrey" value="2">2</button>
			    <button class="btns7 darkgrey" value="3">3</button>
			    <button class="btns7 darkgrey" value="4">4</button>
			    <button class="btns7 darkgrey" value="5">5</button>
			    <button class="btns7 darkgrey" value="6">6</button>
			    <button class="btns7 darkgrey" value="7">7</button>
			    <button class="btns7 darkgrey" value="8">8</button>
			    <button class="btns7 darkgrey" value="9">9</button>
			    <button class="btns7 darkgrey" value="10">10</button>
			    <button class="btns7 darkgrey" value="11">11</button>
			</div>
			<br>
        </div>
    </div>
</div>

@endsection