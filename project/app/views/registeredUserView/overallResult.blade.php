@extends('layouts.masterLogin')

@section('title')
    {{-- USER NAME WILL NEED TO BE TAKEN OUT OF DB --}}
	My Results
	
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
    <!--THIS ALSO NEEDS TO BE TAKEN FROM DB-->
    @if(Auth::check())
   <h2>{{$user->firstName}}'s Results!</h2>
   @endif
@endsection

@section('content')
<div class="container-fluid basicFontStyle">
    <br>
    caila smells
</div>
@endsection