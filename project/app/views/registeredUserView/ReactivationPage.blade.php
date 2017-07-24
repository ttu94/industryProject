@extends('layouts.masterLogin')

@section('title')
	Account Reactivation
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
   <h2 style="color:white">Account Reactivation</h2>
@endsection

@section('content')
<div class="container-fluid" style="text-align:center">
    <br>
    <h2>Hello {{$user->firstName}}<br></h2><br>
    <p class="basicFontStyle">We've just noticed your account is currently deactivated. <br>
    To view all content you must first reactivate your account by choosing "Activate"!</p>
    <br>
    {{ Form::model($user, array('method' => 'PUT', 'route' => array('account.reactivation', Auth::user()->id)))}}
        <button class="button warnred">Activate</button>
    {{ Form::close() }}
    <br>
    <!--<a href={{ route("account.reactivation", array("id" => Auth::user()->id)) }} ><button class="button greenbluedark">Activate</button></a>-->
    <a href={{route("user.logout")}} ><button class="button darkgrey2">Cancel</button></a>



</div> <!--End of container-fluid-->

@endsection
