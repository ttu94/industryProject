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
            case "Module 3": 
                return "Structures";
                break;
            case "Module 4": 
                return "Functions";
                break;
            case "Module 5": 
                return "SCI mechanisms";
                break;
            case "Module 6": 
                return "Types of injuries";
                break;
            case "Module 7": 
                return "Different injuries and their effects on the cord and body";
                break;
            case "Module 8": 
                return "Chromic effects of spinal cord injury";
                break;
            case "Module 9": 
                return "Peripheral nerve regeneration";
                break;
            case "Module 10": 
                return "CNS regeneration";
                break;
            case "Module 11": 
                return "Repair therapeutic strategies";
                break;
        }
    }
    
?> 
<!--id,user_id,moduleName,moduleResult,created_at-->

<!--script for piechart-->
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    
    // variables to generate pie chart
    var completed = 1;
    var incompleted = 11-1;
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['Completed', completed],
            ['Incomplete', incompleted],
        ]);
        
        var options = {'title':'How Much Pizza I Ate Last Night',
                        // 'backgroundColor': '#EFEFEF',
                        'chartArea': {left:'25%',top:0,width:'100%',height:'100%'},
                        'fontName': 'raleway',
                        pieHole: 0.2,
                        colors:['#9FD26C','#79B1EA'],
        };
        
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }
</script>
<div class="container-fluid basicFontStyle">
    <br>
    <div style="background-color:white;border-radius:20px;padding:2px;box-shadow: 0 2px 5px 0 #D3D3D3, 0 2px 10px 0 #D3D3D3;">
        <h1 style="text-align:center"><strong>Overall Results</strong></h1>
        <br>
        <div id="piechart" style="height: 400px"></div>
        <br>
    </div>
    <br>
    <?php
        $oddeven = 0;
        for($i=0;$i<$dbCount;$i++){
            $moduleNo = $userResultsDB[$i]->moduleName;
            $r = ($userResultsDB[$i]->moduleResult * 100);
            if($userResultsDB[$i]->moduleResult > 0.8 && $stopper == false){
                $stopper = true;
                $completedDate = (string) $userResultsDB[$i]->created_at;
            }
            if($r > $results){
                $results = ($userResultsDB[$i]->moduleResult * 100);
                
            }
            
            if(($i+1) == $dbCount){ // this checks if the next record is a different module
                $latestDate = $userResultsDB[$i]->created_at;
                // echo $oddeven;
                // print module info here
                if(($oddeven % 2) == 0){ // this if statement make it float right for every second result
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
                        <p class="resData"> {{ $results }} % </p>
                    </div>
                    <br>
                    <a href={{ route("individual_module", array("moduleNo" => $moduleNo , "id" => Auth::user()->id)) }}><button class="btn3 darkgrey2">See Module 1 Results</button></a>
            
                </div>
                
                <?php
                
            } elseif($moduleNo != $userResultsDB[($i+1)]->moduleName){ // this checks if the next record is a different module
                $latestDate = $userResultsDB[$i]->created_at;
                
                // print module info here
                
                if(($oddeven % 2) == 0){ // this if statement make it float right for every second result
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
                        <p class="resData"> {{ $results }} % </p>
                    </div>
                    <br>
                    <a href={{ route("individual_module", array("moduleNo" => $moduleNo, "id" => Auth::user()->id)) }}><button class="btn3 darkgrey2">See Module 1 Results</button></a>
                </div>
                <?php
                $results = 0;
                $completedDate;
                $stopper = false;
                $oddeven++;   
            }
        }
    ?>
</div>
{{$passCount}}
@endsection