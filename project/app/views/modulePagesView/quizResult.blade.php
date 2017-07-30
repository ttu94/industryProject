@extends('layouts.masterLogin')

@section('title')
    {{--Module names needs to be taken out of database--}}
    {{ $quizNo }} Quiz Results
@endsection

@section('pageTitle')
   <h4>{{ $quizNo }} Quiz Results</h4>
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
    <!--<form class="col-md-12">-->
        {{ Form::open() }}
        <?php 
            $count = 1;
        ?>
        @foreach($userAnswer as $k=>$s)
            <h2>Question {{ $count }}</h2>
            <h3>{{ $k }}
                @if($subA[$count-1] == 'Right')
                    &#10004;
                @else
                    &#9747;
                @endif
            </h3>
            @foreach($moduleAnswersDB as $multiChoice)
                @if($multiChoice->moduleTest_id == $usedID[$count-1])
                    @if($s == $multiChoice->answer)
                        {{ Form::radio($usedID[$count-1], $multiChoice->answer, true)}}
                    @else
                        {{ Form::radio($usedID[$count-1], $multiChoice->answer)}}
                    @endif
                    {{$multiChoice->answer}} <br>
                @endif
            @endforeach
            <?php $count++;  ?>
        @endforeach
        {{ Form::close() }}
    <!--</form>-->

</div>

@endsection