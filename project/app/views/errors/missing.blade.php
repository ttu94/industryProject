@extends('layouts.errorsMaster')

@section('title')
	404 Error
@endsection
   
@section('content')
<div class="basicFontStyle">
    <p style="text-align:center"><img style="margin-top:50px;width:40%;height:50%" align="middle" 
    alt="Sorry, something went wrong. The page you were looking for was moved, removed, renamed or might have not existed." 
    src="{{ URL::asset("images/404error.png") }}"/></p>
    <p style="text-align:center;font-size:20px;color:grey">© 2017 Artwork by Vicky Zhou </p>
    <br>
    <a href="{{ route("home") }}"><button class="btnsE darkgrey">Go Home</button></a>
</div>
@endsection