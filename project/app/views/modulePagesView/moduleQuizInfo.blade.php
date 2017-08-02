@extends('layouts.masterLogin')

@section('title')
    {{--Module names needs to be taken out of database--}}
    {{$quizNo}} Quiz
@endsection

@section('pageTitle')
  <h4>{{$quizNo}} Quiz</h4>
@endsection

@section('content')
<div class="container-fluid"> 
    <br><br>
    <div class="col-md-3 basicFontStyle">
        <br>
    </div>
    
    <div class="col-md-6 basicFontStyle">
        <p style="text-align: center">
            You are about to begin <span style="color:#B70014">{{$quizNo}}</span>. <br><br>
            <div style="float: left; margin-left: 20px">
                <strong>Conditions for the quiz: </strong>
                <div class="basicFontStyle" style="margin-left: 20px; margin-top: 10px">
                    • You have an unlimited number of attempts<br>
                    • There is no time limit<br>
                    • All questions are multiple choice<br>
                    <br>
                </div>
            </div>
        </p>
        <form action={{ route("module_quiz", array("id" => Auth::user()->id, "quizNo" => $quizNo)) }} class="forgetForm">
            <div class="col-md-12" style="text-align: center">
                <button class="darkgrey2" style="width: 200px" type="submit">Start Quiz >></button>
            </div>
        </form>            
    </div>
    
    <div class="col-md-3 basicFontStyle">
        <br>
    </div
</div>

@endsection