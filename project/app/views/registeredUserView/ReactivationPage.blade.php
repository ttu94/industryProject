@extends('layouts.masterLogin')

@section('title')
	Account Reactivation
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
   <h2 style="color:white">Account Reactivation</h2>
@endsection

@section('content')
<div class="container-fluid">
    <br>
    <h1 style="text-align: center">Hello {{$user->firstName}}<br></h1>
    <h2 style="text-align: center">We've just noticed your account is currently deactivated. To view all content you must first reactivate your account by choosing "Activate"!</h2>
    <br>
    {{ Form::model($user, array('method' => 'PUT', 'route' => array('account.reactivation', Auth::user()->id)))}}
        <button class="button greenbluedark">Activate</button>
    {{ Form::close() }}

    <!--<a href={{ route("account.reactivation", array("id" => Auth::user()->id)) }} ><button class="button greenbluedark">Activate</button></a>-->
    <a href={{route("user.logout")}} ><button class="button greenbluedark">Cancel</button></a>



</div> <!--End of container-fluid-->

@endsection
