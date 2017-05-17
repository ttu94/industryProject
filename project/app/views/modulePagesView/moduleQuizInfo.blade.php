@extends('layouts.masterLogin')

@section('title')
    {{--Module names needs to be taken out of database--}}
    [Module Name] Quiz
@endsection

@section('pageTitle')
   <h2>[Module Name here] Quiz</h2>
@endsection

@section('content')
<div class="container-fluid"> 
    <br>
    <div class="col-md-4 basicFontStyle">
        <br>
    </div>
    
    <div class="col-md-4 basicFontStyle">
        <p style="text-align: center">
            You are about to begin [Module number and name here]. <br>
            <div style="float: left">
                <strong>Conditions for quiz: </strong>
                <div class="basicFontStyle" style="margin-left: 20px; margin-top: 10px">
                    • Unlimited attempts<br>
                    • No time limit<br>
                    • Multiple choice<br>
                    <br>
                </div>
            </div>
        
        </p>
        <form action={{ route("module_quiz", array("id" => Auth::user()->id)) }} class="forgetForm">
            <div class="col-md-12" style="text-align: center">
                <button class="whitebrown" style="width: 200px" type="submit">Start Quiz >></button>
            </div>
        </form>            
    </div>
    
    <div class="col-md-4 basicFontStyle">
        <br>
    </div
</div>

@endsection