@extends('layouts.masterLogin')

@section('title')
	My Results
@endsection

@section('pageTitle')
    @if(Auth::check())
   <h2 style="color:white">{{$user->firstName}}'s Results: {{ $moduleNo }} </h2>
   @endif
@endsection

@section('content')
<div class="container-fluid basicFontStyle">
    <?php
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
    <br>
    <h1 style="text-align:center"><strong> {{ $moduleNo }}: {{moduleFullName($moduleNo)}}</strong></h1>
    <br>
    <div class="col-md-12">
        <table class="sortable-theme-bootstrap" style="width:100%" data-sortable>
            <thead>
                <tr>
                    <th>Attempt No.</th>
                    <th>Result (%)</th>
                    <!--<th>Score</th>-->
                    <th>Date of test taken</th>
                    <!--<th>Time taken</th>-->
                </tr>
            </thead>
            <tbody>
                <?php $count=1 ?>
                @foreach($userResultsDB as $k=>$r)
                    <tr>
                        <td> {{ $count++ }} </td>
                        <td> {{ ($r->moduleResult * 100) }} </td>
                        <!--<td> [score: e.g. 4/10]</td>-->
                        <td> {{ $r->created_at }} </td>
                        <!--<td> [time taken] </td>-->
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection