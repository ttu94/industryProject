@extends('layouts.adminMaster')

@section('title')
	Admin Quiz Editor
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
   <h2>Admin Quiz Editor</h2>
@endsection

@section('content')
<div class="container-fluid">
    <br>
    <div class="col-md-12 basicFontStyle">

         <form action="{{ action('UserController@UpdateQuestion') }}" method="POST">
            {{$val}}
        </form>
        
        <!--<a href=""> ADD Question</a>-->
    </div>
</div>

@endsection
