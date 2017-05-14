@extends('layouts.masterLogin')

@section('title')
	My Results
@endsection

@section('pageTitle')
    @if(Auth::check())
   <h2>{{$user->firstName}}'s Results: Module [number]</h2>
   @endif
@endsection

@section('content')
<div class="container-fluid basicFontStyle">
    Testing
</div>
@endsection