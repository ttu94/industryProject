@extends('layouts.masterLogin')

@section('title')
    {{-- USER NAME WILL NEED TO BE TAKEN OUT OF DB --}}
	My Results
	
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
    <!--THIS ALSO NEEDS TO BE TAKEN FROM DB-->
    @if(Auth::check())
   <h2 style="color:white">{{$user->firstName}}'s Results!</h2>
   @endif
@endsection

@section('content')
<?php 
    $dbCount = count($userResultsDB);
    $lastModule = true;
    $completedDate = "Not Completed"; 
    $latestDate; 
    $lr = true; 
    $results = 0.0; 
    $stopper = false;
    
    function moduleFullName($moduleNumber){
        switch($moduleNumber){
            case "Module 1": 
                return "Facts and Figures for SCI"; 
                break;
            case "Module 2": 
                return "Spinal cord as a neutral tissue and injury to the nerves";
                break;
            case "Module 3": break;
            case "Module 4": break;
            case "Module 5": break;
            case "Module 6": break;
            case "Module 7": break;
            case "Module 8": break;
            case "Module 9": break;
            case "Module 10": break;
            case "Module 11": break;
        }
    }
    
?> 
<!--id,user_id,moduleName,moduleResult,created_at-->


<div class="container-fluid basicFontStyle">
    <br>
    <div class="overallPanel">
        <h1 style="text-align:center;font-size:30px"><strong>Overall Results</strong></h1>
        <br>
        <img class="graph" alt="demographs" src="{{ URL::to('/') }}/images/demographs.png"/>
    </div>
    <br>
    
    <?php
        for($i=0;$i<$dbCount;$i++){
            $moduleNo = $userResultsDB[$i]->moduleName;
            
            if($userResultsDB[$i]->moduleResult > 0.8 && $stopper == false){
                $stopper = true;
                $completedDate = (string) $userResultsDB[$i]->created_at;
            }
            if($userResultsDB[$i]->moduleResult > $results){
                $results = ($userResultsDB[$i]->moduleResult * 100);
            }
            
            if(($i+1) == $dbCount){ // this checks if the next record is a different module
                $latestDate = $userResultsDB[$i]->created_at;
                
                // print module info here
                if($i % 2){ // this if statement make it float right for every second result
                    ?> <div class="moduleResPanel col-md-6"> <?php
                } else {
                    ?> <div class="moduleResPanel col-md-6" style="float:right"> <?php
                }
                ?>
                
                
                    <p class="modResTitle"><strong> {{ $moduleNo }} : </strong><br> {{ moduleFullName($moduleNo) }} </p>
                    <div class="col-md-6">
                        <br>
                        <p class="resHeaders"><strong>Date of completion:</strong></p>
                        <p class="resHeaders"><strong>Date of last test:</strong></p>
                        <p class="resHeaders"><strong>Highest score:</strong></p>
                    </div>
                    <div class="col-md-6">
                        <br>
                        <p class="resData"> {{ $completedDate }} </p>
                        <p class="resData"> {{ $latestDate }} </p>
                        <p class="resData"> {{ $results }} </p>
                    </div>
                    <br>
                    <a href={{ route("individual_module", array("moduleNo" => $moduleNo , "id" => Auth::user()->id)) }}><button class="btn3 darkgrey2">See Module 1 Results</button></a>
            
                </div>
                
                <?php
                
            } elseif($moduleNo != $userResultsDB[($i+1)]->moduleName){ // this checks if the next record is a different module
                $latestDate = $userResultsDB[$i]->created_at;
                
                // print module info here
                
                if($i % 2){ // this if statement make it float right for every second result
                    ?> <div class="moduleResPanel col-md-6"> <?php
                } else {
                    ?> <div class="moduleResPanel col-md-6" style="float:right"> <?php
                }
                ?>
                    <p class="modResTitle"><strong> {{ $moduleNo }} : </strong><br> {{ moduleFullName($moduleNo) }} </p>
                    <div class="col-md-6">
                        <br>
                        <p class="resHeaders"><strong>Date of completion:</strong></p>
                        <p class="resHeaders"><strong>Date of last test:</strong></p>
                        <p class="resHeaders"><strong>Highest score:</strong></p>
                    </div>
                    <div class="col-md-6">
                        <br>
                        <p class="resData"> {{ $completedDate }} </p>
                        <p class="resData"> {{ $latestDate }} </p>
                        <p class="resData"> {{ $results }} </p>
                    </div>
                    <br>
                    <a href={{ route("individual_module", array("moduleNo" => $moduleNo, "id" => Auth::user()->id)) }}><button class="btn3 darkgrey2">See Module 1 Results</button></a>
            
                </div>
                
                <?php
                
                $results = 0;
                $completedDate;
                $stopper = false;
                
            }
                
        }
    ?>

    <!--MODULE 1 RESULTS-->
    <!--<div class="moduleResPanel col-md-6">-->
    <!--    <p class="modResTitle"><strong>Module 1: </strong><br>Facts and Figures for SCI</p>-->
    <!--    <div class="col-md-6">-->
    <!--        <br>-->
    <!--        <p class="resHeaders"><strong>Date of completion:</strong></p>-->
    <!--        <p class="resHeaders"><strong>Date of last test:</strong></p>-->
    <!--        <p class="resHeaders"><strong>Highest score:</strong></p>-->
    <!--    </div>-->
    <!--    <div class="col-md-6">-->
    <!--        <br>-->
    <!--        <p class="resData"> 15/05/17 12:00 PM</p>-->
    <!--        <p class="resData"> 15/05/17 12:00 PM</p>-->
    <!--        <p class="resData"> 90%</p>-->
    <!--    </div>-->
    <!--    <br>-->
    <!--    <a href={{ route("individual_module", array("moduleNo" => "Module 1", "id" => Auth::user()->id)) }}><button class="btn3 darkgrey2">See Module 1 Results</button></a>-->

    <!--</div>-->
    
    <!--MODULE 2 RESULTS-->
    <!--<div class="moduleResPanel col-md-6" style="float:right">-->
    <!--    <p class="modResTitle"><strong>Module 2: </strong><br>Spinal cord as a neutral tissue and injury to the nerves</p>-->
    <!--    <div class="col-md-6">-->
    <!--        <br>-->
            <!--User data from database-->
    <!--        <p class="resHeaders"><strong>Date of completion:</strong></p>-->
            <!--User data from database-->
    <!--        <p class="resHeaders"><strong>Date of last test:</strong></p>-->
            <!--User data from database-->
    <!--        <p class="resHeaders"><strong>Highest score:</strong></p>-->
    <!--    </div>-->
    <!--    <div class="col-md-6">-->
    <!--        <br>-->
    <!--        <p class="resData"> 15/05/17 12:00 PM</p>-->
    <!--        <p class="resData"> 15/05/17 12:00 PM</p>-->
    <!--        <p class="resData"> 73%</p>-->
    <!--    </div>-->
    <!--    <div>-->
    <!--        <br>-->
    <!--        <a href={{ route("individual_module", array("id" => Auth::user()->id)) }}><button class="btn3 darkgrey2">See Module 2 Results</button></a>-->
    <!--    </div>-->
    <!--</div>-->
    <!--<br><br>-->
    
    <!--MODULE 3 RESULTS-->
    <!--<div class="moduleResPanel">-->
    <!--    <p class="modResTitle"><strong>Module 3: </strong>Structures</p>-->
    <!--    <div class="col-md-2">-->
    <!--        <br>-->
    <!--        User data from database-->
    <!--        <p class="resHeaders"><strong>Date of completion:</strong></p>-->
    <!--        User data from database-->
    <!--        <p class="resHeaders"><strong>Date of last test:</strong></p>-->
    <!--        User data from database-->
    <!--        <p class="resHeaders"><strong>Pass percentage:</strong></p>-->
    <!--    </div>-->
    <!--    <div class="col-md-4">-->
    <!--        <br>-->
    <!--        <p class="resData"> 15/05/17 12:00 PM</p>-->
    <!--        <p class="resData"> 15/05/17 12:00 PM</p>-->
    <!--        <p class="resData"> 73%</p>-->
    <!--    </div>-->
    <!--    <div class="col-md-6" id="ovalContain">-->
    <!--        <div id="ovalPerc">-->
    <!--            <p class="percent" style="text-align: center">73%</p>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <div class="col-md-12">-->
    <!--        <a href={{ route("individual_module", array("id" => Auth::user()->id)) }}><button class="btn3 darkgrey2">See Module 3 Results</button></a>-->
    <!--    </div>-->
    <!--</div>-->
    <!--<br><br>-->
    
    <!--MODULE 4 RESULTS-->
    <!--<div class="moduleResPanel">-->
    <!--    <p class="modResTitle"><strong>Module 4: </strong>Functions</p>-->
    <!--    <div class="col-md-2">-->
    <!--        <br>-->
    <!--        User data from database-->
    <!--        <p class="resHeaders"><strong>Date of completion:</strong></p>-->
    <!--        User data from database-->
    <!--        <p class="resHeaders"><strong>Date of last test:</strong></p>-->
    <!--        User data from database-->
    <!--        <p class="resHeaders"><strong>Pass percentage:</strong></p>-->
    <!--    </div>-->
    <!--    <div class="col-md-4">-->
    <!--        <br>-->
    <!--        <p class="resData"> 15/05/17 12:00 PM</p>-->
    <!--        <p class="resData"> 15/05/17 12:00 PM</p>-->
    <!--        <p class="resData"> 73%</p>-->
    <!--    </div>-->
    <!--    <div class="col-md-6" id="ovalContain">-->
    <!--        <div id="ovalPerc">-->
    <!--            <p class="percent" style="text-align: center">73%</p>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <div class="col-md-12">-->
    <!--        <a href={{ route("individual_module", array("id" => Auth::user()->id)) }}><button class="btn3 darkgrey2">See Module 4 Results</button></a>-->
    <!--    </div>    -->
    <!--</div>-->
    <!--<br><br>-->
    
    <!--MODULE 5 RESULTS-->
    <!--<div class="moduleResPanel">-->
    <!--    <p class="modResTitle"><strong>Module 5: </strong>SCI mechanisms</p>-->
    <!--    <div class="col-md-2">-->
    <!--        <br>-->
    <!--        User data from database-->
    <!--        <p class="resHeaders"><strong>Date of completion:</strong></p>-->
    <!--        User data from database-->
    <!--        <p class="resHeaders"><strong>Date of last test:</strong></p>-->
    <!--        User data from database-->
    <!--        <p class="resHeaders"><strong>Pass percentage:</strong></p>-->
    <!--    </div>-->
    <!--    <div class="col-md-4">-->
    <!--        <br>-->
    <!--        <p class="resData"> 15/05/17 12:00 PM</p>-->
    <!--        <p class="resData"> 15/05/17 12:00 PM</p>-->
    <!--        <p class="resData"> 73%</p>-->
    <!--    </div>-->
    <!--    <div class="col-md-6" id="ovalContain">-->
    <!--        <div id="ovalPerc">-->
    <!--            <p class="percent" style="text-align: center">73%</p>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <div class="col-md-12">-->
    <!--        <a href={{ route("individual_module", array("id" => Auth::user()->id)) }}><button class="btn3 darkgrey2">See Module 5 Results</button></a>-->
    <!--    </div>    -->
    <!--</div>-->
    <!--<br><br>-->
    
    <!--MODULE 6 RESULTS-->
    <!--<div class="moduleResPanel">-->
    <!--    <p class="modResTitle"><strong>Module 6: </strong>Types of injuries</p>-->
    <!--    <div class="col-md-2">-->
    <!--        <br>-->
    <!--        User data from database-->
    <!--        <p class="resHeaders"><strong>Date of completion:</strong></p>-->
    <!--        User data from database-->
    <!--        <p class="resHeaders"><strong>Date of last test:</strong></p>-->
    <!--        User data from database-->
    <!--        <p class="resHeaders"><strong>Pass percentage:</strong></p>-->
    <!--    </div>-->
    <!--    <div class="col-md-4">-->
    <!--        <br>-->
    <!--        <p class="resData"> 15/05/17 12:00 PM</p>-->
    <!--        <p class="resData"> 15/05/17 12:00 PM</p>-->
    <!--        <p class="resData"> 73%</p>-->
    <!--    </div>-->
    <!--    <div class="col-md-6" id="ovalContain">-->
    <!--        <div id="ovalPerc">-->
    <!--            <p class="percent" style="text-align: center">73%</p>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <div class="col-md-12">-->
    <!--        <a href={{ route("individual_module", array("id" => Auth::user()->id)) }}><button class="btn3 darkgrey2">See Module 6 Results</button></a>-->
    <!--    </div>-->
    <!--</div>-->
    <!--<br><br>-->
    
    <!--MODULE 7 RESULTS-->
    <!--<div class="moduleResPanel">-->
    <!--    <p class="modResTitle"><strong>Module 7: </strong>Different injuries and their effects on the cord and body</p>-->
    <!--    <div class="col-md-2">-->
    <!--        <br>-->
    <!--        User data from database-->
    <!--        <p class="resHeaders"><strong>Date of completion:</strong></p>-->
    <!--        User data from database-->
    <!--        <p class="resHeaders"><strong>Date of last test:</strong></p>-->
    <!--        User data from database-->
    <!--        <p class="resHeaders"><strong>Pass percentage:</strong></p>-->
    <!--    </div>-->
    <!--    <div class="col-md-4">-->
    <!--        <br>-->
    <!--        <p class="resData"> 15/05/17 12:00 PM</p>-->
    <!--        <p class="resData"> 15/05/17 12:00 PM</p>-->
    <!--        <p class="resData"> 73%</p>-->
    <!--    </div>-->
    <!--    <div class="col-md-6" id="ovalContain">-->
    <!--        <div id="ovalPerc">-->
    <!--            <p class="percent" style="text-align: center">73%</p>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <div class="col-md-12">-->
    <!--        <a href={{ route("individual_module", array("id" => Auth::user()->id)) }}><button class="btn3 darkgrey2">See Module 7 Results</button></a>-->
    <!--    </div>-->
    <!--</div>-->
    <!--<br><br>-->
    
    <!--MODULE 8 RESULTS-->
    <!--<div class="moduleResPanel">-->
    <!--        <p class="modResTitle"><strong>Module 8: </strong>Chromic effects of spinal cord injury</p>-->
    <!--    <div class="col-md-2">-->
    <!--    <br>-->
    <!--        User data from database-->
    <!--        <p class="resHeaders"><strong>Date of completion:</strong></p>-->
    <!--        User data from database-->
    <!--        <p class="resHeaders"><strong>Date of last test:</strong></p>-->
    <!--        User data from database-->
    <!--        <p class="resHeaders"><strong>Pass percentage:</strong></p>-->
    <!--    </div>-->
    <!--    <div class="col-md-4">-->
    <!--        <br>-->
    <!--        <p class="resData"> 15/05/17 12:00 PM</p>-->
    <!--        <p class="resData"> 15/05/17 12:00 PM</p>-->
    <!--        <p class="resData"> 73%</p>-->
    <!--    </div>-->
    <!--    <div class="col-md-6" id="ovalContain">-->
    <!--        <div id="ovalPerc">-->
    <!--            <p class="percent" style="text-align: center">73%</p>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <div class="col-md-12">-->
    <!--        <a href={{ route("individual_module", array("id" => Auth::user()->id)) }}><button class="btn3 darkgrey2">See Module 8 Results</button></a>-->
    <!--    </div>-->
    <!--</div>-->
    <!--<br><br>-->
    
    <!-- MODULE 9 RESULTS-->
    <!--<div class="moduleResPanel">-->
    <!--    <p class="modResTitle"><strong>Module 9: </strong>Peripheral nerve regeneration</p>-->
    <!--    <div class="col-md-2">-->
    <!--        <br>-->
    <!--        User data from database-->
    <!--        <p class="resHeaders"><strong>Date of completion:</strong></p>-->
    <!--        User data from database-->
    <!--        <p class="resHeaders"><strong>Date of last test:</strong></p>-->
    <!--        User data from database-->
    <!--        <p class="resHeaders"><strong>Pass percentage:</strong></p>-->
    <!--    </div>-->
    <!--    <div class="col-md-4">-->
    <!--        <br>-->
    <!--        <p class="resData"> 15/05/17 12:00 PM</p>-->
    <!--        <p class="resData"> 15/05/17 12:00 PM</p>-->
    <!--        <p class="resData"> 90%</p>-->
    <!--    </div>-->
    <!--    <div class="col-md-6" id="ovalContain">-->
    <!--        <div id="ovalPerc">-->
    <!--            <p class="percent" style="text-align: center">73%</p>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <div class="col-md-12">-->
    <!--        <a href={{ route("individual_module", array("id" => Auth::user()->id)) }}><button class="btn3 darkgrey2">See Module 9 Results</button></a>-->
    <!--    </div>-->
    <!--</div>-->
    <!--<br><br>-->
    
    <!--MODULE 10 RESULTS-->
    <!--<div class="moduleResPanel">-->
    <!--    <p class="modResTitle"><strong>Module 10: </strong>CNS regeneration</p>-->
    <!--    <div class="col-md-2">-->
    <!--        <br>-->
    <!--        User data from database-->
    <!--        <p class="resHeaders"><strong>Date of completion:</strong></p>-->
    <!--        User data from database-->
    <!--        <p class="resHeaders"><strong>Date of last test:</strong></p>-->
    <!--        User data from database-->
    <!--        <p class="resHeaders"><strong>Pass percentage:</strong></p>-->
    <!--    </div>-->
    <!--    <div class="col-md-4">-->
    <!--        <br>-->
    <!--        <p class="resData"> 15/05/17 12:00 PM</p>-->
    <!--        <p class="resData"> 15/05/17 12:00 PM</p>-->
    <!--        <p class="resData"> 73%</p>-->
    <!--    </div>-->
    <!--    <div class="col-md-6" id="ovalContain">-->
    <!--        <div id="ovalPerc">-->
    <!--            <p class="percent" style="text-align: center">73%</p>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <div class="col-md-12">-->
    <!--        <a href={{ route("individual_module", array("id" => Auth::user()->id)) }}><button class="btn3 darkgrey2">See Module 10 Results</button></a>-->
    <!--    </div>-->
    <!--</div>-->
    <!--<br><br>-->
    
    <!--MODULE 11 RESULTS-->
    <!--<div class="moduleResPanel">-->
    <!--    <p class="modResTitle"><strong>Module 11: </strong>Repair therapeutic strategies</p>-->
    <!--    <div class="col-md-2">-->
    <!--        <br>-->
    <!--        User data from database-->
    <!--        <p class="resHeaders"><strong>Date of completion:</strong></p>-->
    <!--        User data from database-->
    <!--        <p class="resHeaders"><strong>Date of last test:</strong></p>-->
    <!--        User data from database-->
    <!--        <p class="resHeaders"><strong>Pass percentage:</strong></p>-->
    <!--    </div>-->
    <!--    <div class="col-md-4">-->
    <!--        <br>-->
    <!--        <p class="resData"> 15/05/17 12:00 PM</p>-->
    <!--        <p class="resData"> 15/05/17 12:00 PM</p>-->
    <!--        <p class="resData"> 73%</p>-->
    <!--    </div>-->
    <!--    <div class="col-md-6" id="ovalContain">-->
    <!--        <div id="ovalPerc">-->
    <!--            <p class="percent">73%</p>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <div class="col-md-12">-->
    <!--        <a href={{ route("individual_module", array("id" => Auth::user()->id)) }}><button class="btn3 darkgrey2">See Module 11 Results</button></a>-->
    <!--    </div>-->
    <!--</div>-->
    
</div>
@endsection