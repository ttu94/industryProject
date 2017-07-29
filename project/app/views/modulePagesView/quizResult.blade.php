@extends('layouts.masterLogin')

@section('title')
    {{--Module names needs to be taken out of database--}}
    Quiz Results
@endsection

@section('pageTitle')
   <h4>Quiz Results</h4>
@endsection

@section('content')
<div class="container-fluid"> 
    <br><br>
    <div class="col-md-12">
        <!--ROUTE NEEDS TO BE ROUTED WITH USER ID AND MODULE ID-->
        <a href={{ route("module_quiz_info", array("id" => Auth::user()->id)) }}><button class="darkgrey2" style="float:left">Retake Quiz</button></a>
        <!--ROUTE IS GOOD-->
        <a href={{ route("overall_results", array("id" => Auth::user()->id)) }}><button class="darkgrey2" style="float:right">See All Results</button></a>
    </div>
    <div class="col-md-12">
        <h1>Your Results: 5/10</h1>
    </div>
    <form class="col-md-12">
        <?php 
            $count = -1;
        ?>
        @foreach($userAnswer as $k=>$s)
            
            @if($count > 0)
                <h2>Question {{ $count }}</h2>
                <h3>{{ $k }}</h3>
                {{ $s }}
                
            @endif
            <?php $count++;  ?>
        @endforeach
        
    </form>

</div>

@endsection