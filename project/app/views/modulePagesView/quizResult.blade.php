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
            $count = 0;
        ?>
        @foreach($subA as $s)
            {{ $s }}
        @endforeach
        @foreach($usedQuestions as $usedQ)
            <?php $count++; ?>
            <div class="linearRadio basicFontStyle">
                <h2> Question {{ $count }}: {{ str_replace('_', ' ', $usedQ) }}
                    @if($subA[$count-1] == "Right")
                            <span class="glyphicon glyphicon-ok" style="color: #A7D2CB" aria-hidden="true"></span>
                            <!--<p>it's correct yay</p>-->
                    @else
                            <span class="glyphicon glyphicon-remove" style="color: #BE192B" aria-hidden="true"></span>
                    @endif
                </h2>
            </div>
        @endforeach
        
    </form>

</div>

@endsection