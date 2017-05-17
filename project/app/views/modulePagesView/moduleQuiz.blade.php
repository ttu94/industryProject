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
    <br><br>
<div class="progress">
  <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar"
  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%; background-color:#F2D388; color: #595145">
    60% Complete
  </div>
</div>
<div class="col-md-12">
    <div class="linearRadio basicFontStyle">
    <h2>Question 1</h2>
    {{ Form::radio('m1q1', 'true')}} True
    {{ Form::radio('m1q1', 'False')}} False
    </div>
    <div class="linearRadio basicFontStyle">
    <h2>Question 2</h2>
    {{ Form::radio('m1q2', 'true')}} True
    {{ Form::radio('m1q2', 'False')}} False
    </div>
    <div class="linearRadio basicFontStyle">
    <h2>Question 3</h2>
    {{ Form::radio('m1q3', 'true')}} True
    {{ Form::radio('m1q3', 'False')}} False
    </div>
</div>

</div>

@endsection