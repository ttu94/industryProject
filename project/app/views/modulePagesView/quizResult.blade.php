@extends('layouts.masterLogin')

@section('title')
    {{--Module names needs to be taken out of database--}}
    [Module Name] Quiz Results
@endsection

@section('pageTitle')
   <h2>[Module Name here] Quiz Results</h2>
@endsection

@section('content')
<div class="container-fluid"> 
    <br><br>
    <div class="col-md-12">
        <!--ROUTE NEEDS TO BE ROUTED WITH USER ID AND MODULE ID-->
        <a href={{ route("module_quiz_info", array("id" => Auth::user()->id)) }}><button class="greenbluelight2" style="float:left">Retake Quiz</button></a>
        <!--ROUTE IS GOOD-->
        <a href={{ route("overall_results", array("id" => Auth::user()->id)) }}><button class="greenbluelight2" style="float:right">See All Results</button></a>
    </div>
    <div class="col-md-12">
        <h1>Your Results: 5/10</h1>
    </div>
    <form class="col-md-12">
        <?php $count = 0; ?>
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
        <!--<div class="linearRadio basicFontStyle">-->
        <!--    <h2>-->
        <!--        Question 1: -->
                <!--requires and if statement to show tick or crosses-->
        <!--        <span class="glyphicon glyphicon-ok" style="color: #A7D2CB" aria-hidden="true"></span>-->
        <!--    </h2>-->
        <!--    <h3> {Question insert here}</h3>-->
        <!--    {{ Form::radio('m1q1', 'true')}} a-->
        <!--    {{ Form::radio('m1q1', 'false')}} b-->
        <!--    {{ Form::radio('m1q1', 'false')}} c-->
        <!--    {{ Form::radio('m1q1', 'false')}} d-->
        <!--    <br>-->
        <!--</div>-->
        <!--<br>-->
        <!--<div class="linearRadio basicFontStyle">-->
        <!--    <h2>-->
        <!--        Question 2:-->
                <!--requires and if statement to show tick or crosses-->
        <!--        <span class="glyphicon glyphicon-ok" style="color: #A7D2CB" aria-hidden="true"></span>-->
        <!--    </h2>-->
        <!--    <h3> {Question insert here}</h3>-->
        <!--    {{ Form::radio('m1q1', 'true')}} a-->
        <!--    {{ Form::radio('m1q1', 'false')}} b-->
        <!--    {{ Form::radio('m1q1', 'false')}} c-->
        <!--    {{ Form::radio('m1q1', 'false')}} d-->
        <!--    <br>-->
        <!--</div>-->
        <!--<br>-->
        <!--<div class="linearRadio basicFontStyle">-->
        <!--    <h2>-->
        <!--        Question 3:-->
                <!--requires and if statement to show tick or crosses-->
        <!--        <span class="glyphicon glyphicon-remove" style="color: #BE192B" aria-hidden="true"></span>-->
        <!--    </h2>-->
        <!--    <h3> {Question insert here}</h3>-->
        <!--    {{ Form::radio('m1q1', 'true')}} a-->
        <!--    {{ Form::radio('m1q1', 'false')}} b-->
        <!--    {{ Form::radio('m1q1', 'false')}} c-->
        <!--    {{ Form::radio('m1q1', 'false')}} d-->
        <!--    <br>-->
        <!--</div>-->
        <!--<br>-->
        <!--<div class="linearRadio basicFontStyle">-->
        <!--    <h2>-->
        <!--        Question 4:-->
                <!--requires and if statement to show tick or crosses-->
        <!--        <span class="glyphicon glyphicon-remove" style="color: #BE192B" aria-hidden="true"></span>-->
        <!--    </h2>-->
        <!--    <h3> {Question insert here}</h3>-->
        <!--    {{ Form::radio('m1q1', 'true')}} a-->
        <!--    {{ Form::radio('m1q1', 'false')}} b-->
        <!--    {{ Form::radio('m1q1', 'false')}} c-->
        <!--    {{ Form::radio('m1q1', 'false')}} d-->
        <!--    <br>-->
        <!--</div>-->
        <!--<br>-->
        <!--<div class="linearRadio basicFontStyle">-->
        <!--    <h2>-->
        <!--        Question 5:-->
                <!--requires and if statement to show tick or crosses-->
        <!--        <span class="glyphicon glyphicon-remove" style="color: #BE192B" aria-hidden="true"></span>-->
        <!--    </h2>-->
        <!--    <h3> {Question insert here}</h3>-->
        <!--    {{ Form::radio('m1q1', 'true')}} a-->
        <!--    {{ Form::radio('m1q1', 'false')}} b-->
        <!--    {{ Form::radio('m1q1', 'false')}} c-->
        <!--    {{ Form::radio('m1q1', 'false')}} d-->
        <!--    <br>-->
        <!--</div>-->
        <!--<br>-->
        <!--<div class="linearRadio basicFontStyle">-->
        <!--    <h2>-->
        <!--        Question 6:-->
                <!--requires and if statement to show tick or crosses-->
        <!--        <span class="glyphicon glyphicon-remove" style="color: #BE192B" aria-hidden="true"></span>-->
        <!--    </h2>-->
        <!--    <h3> {Question insert here}</h3>-->
        <!--    {{ Form::radio('m1q1', 'true')}} a-->
        <!--    {{ Form::radio('m1q1', 'false')}} b-->
        <!--    {{ Form::radio('m1q1', 'false')}} c-->
        <!--    {{ Form::radio('m1q1', 'false')}} d-->
        <!--    <br>-->
        <!--</div>-->
        <!--<br>-->
        <!--<div class="linearRadio basicFontStyle">-->
        <!--    <h2>-->
        <!--        Question 7:-->
                <!--requires and if statement to show tick or crosses-->
        <!--        <span class="glyphicon glyphicon-remove" style="color: #BE192B" aria-hidden="true"></span>-->
        <!--    </h2>-->
        <!--    <h3> {Question insert here}</h3>-->
        <!--    {{ Form::radio('m1q1', 'true')}} a-->
        <!--    {{ Form::radio('m1q1', 'false')}} b-->
        <!--    {{ Form::radio('m1q1', 'false')}} c-->
        <!--    {{ Form::radio('m1q1', 'false')}} d-->
        <!--    <br>-->
        <!--</div>-->
        <!--<br>-->
        <!--<div class="linearRadio basicFontStyle">-->
        <!--    <h2>-->
        <!--        Question 8:-->
                <!--requires and if statement to show tick or crosses-->
        <!--        <span class="glyphicon glyphicon-ok" style="color: #A7D2CB" aria-hidden="true"></span>-->
        <!--    </h2>-->
        <!--    <h3> {Question insert here}</h3>-->
        <!--    {{ Form::radio('m1q1', 'true')}} a-->
        <!--    {{ Form::radio('m1q1', 'false')}} b-->
        <!--    {{ Form::radio('m1q1', 'false')}} c-->
        <!--    {{ Form::radio('m1q1', 'false')}} d-->
        <!--    <br>-->
        <!--</div>-->
        <!--<br>-->
        <!--<div class="linearRadio basicFontStyle">-->
        <!--    <h2>-->
        <!--        Question 9:-->
                <!--requires and if statement to show tick or crosses-->
        <!--        <span class="glyphicon glyphicon-ok" style="color: #A7D2CB" aria-hidden="true"></span>-->
        <!--    </h2>-->
        <!--    <h3> {Question insert here}</h3>-->
        <!--    {{ Form::radio('m1q1', 'true')}} a-->
        <!--    {{ Form::radio('m1q1', 'false')}} b-->
        <!--    {{ Form::radio('m1q1', 'false')}} c-->
        <!--    {{ Form::radio('m1q1', 'false')}} d-->
        <!--    <br>-->
        <!--</div>-->
        <!--<br>-->
        <!--<div class="linearRadio basicFontStyle">-->
        <!--    <h2>-->
        <!--        Question 10:-->
                <!--requires and if statement to show tick or crosses-->
        <!--        <span class="glyphicon glyphicon-ok" style="color: #A7D2CB" aria-hidden="true"></span>-->
        <!--    </h2>-->
        <!--    <h3> {Question insert here}</h3>-->
        <!--    {{ Form::radio('m1q1', 'true')}} a-->
        <!--    {{ Form::radio('m1q1', 'false')}} b-->
        <!--    {{ Form::radio('m1q1', 'false')}} c-->
        <!--    {{ Form::radio('m1q1', 'false')}} d-->
        <!--    <br>-->
        <!--</div><br>-->
    </form>


</div>

@endsection