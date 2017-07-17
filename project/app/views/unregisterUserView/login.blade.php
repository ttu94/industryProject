@extends('layouts.unregisteredMaster')

@section('title')
	Login
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
   <h2 style="color:white">Login</h2>
@endsection

@section('content')
<div class="container-fluid">
    <br>
    <!--Flash message for account reactivation -->
    @if(Session::has('success'))
        <div class="alert alert-success alert-dismissable fade in"  style="background-color: #D5E1EE; border: none">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <h2 style="text-align:center">{{ Session::get('success') }}</h2>
        </div>
    @endif
    <!--Linking to user register page-->
    <div class="col-md-4">
    <br><br><br><br>
    <div id="noLogin">
        <h3 class="raleway">Don't have an account?<br>Register now</h2>
        <br>
        <a href="register"><button class="button darkgrey2" style="width:100%">Create Account</button></a>
    </div>
    </div>
    
    <!--user login then routed to user's dashboard-->
    <div class="col-md-8">
        <br><br>
        {{ Form::open(array('url' => secure_url('user/login'))) }}
            <div class ="loginBlock">
                <h1 class="raleway">Registered User</h1>
                <br>

                @if(Session::has('invalid'))
                    <div>
                         <p class="basicFontStyle" style="color:red">{{ Session::get('invalid') }}</p>
                    </div>
                @endif
                <input class="login" style="font-size:18px" type="text" placeholder="Email" name="email" width="50px">
                <br>
                <input class="login" style="font-size:18px" type="password" placeholder="Password" name="password">
                <br>
                <br>
                <button class="button darkgrey2">Sign In</button>
                <br><br>
                <a href="forgottenPassword" style="color:#195DA3; font-size:18px">Forgot password?</a>
                <br><br>
                <a href="adminLogin" style="color:#195DA3; font-size:18px">Admin Login</a>
            </div>
        {{ Form::close() }}
    </div>
</div>

@endsection
