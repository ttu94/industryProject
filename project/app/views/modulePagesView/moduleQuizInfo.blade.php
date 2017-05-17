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

  caila smells. thuan is cool af.
<a href={{ route("module_quiz", array("id" => Auth::user()->id)) }} ><button class="btn whitebrown">Start Quiz >></button></a>
    
</div>

@endsection