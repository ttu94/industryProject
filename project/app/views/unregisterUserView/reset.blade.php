@extends('layouts.unregisteredMaster')

@section('title')
	Forgotten Password Retrieval
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
   <h2 style="color:white">Need help with your password?</h2>
@endsection

@section('content')
<div class="container-fluid">
    <br><br>
    <div class="col-md-3 basicFontStyle">
        <br>
    </div>
    
    <div class="col-md-6 basicFontStyle" style="text-align:center">
        <!--Errors for password recovery-->
        @if($errors->any())
            <div class="alert alert-error">
                <a href="#" class="close" data-dimiss="alert"></a>
                {{ implode('',$errors->all('<p class="error" style="color:red">:message</p>')) }}
            </div>
        @endif
         
        <!--Form to change password when recovering-->
        <form action="{{ action('RemindersController@postReset') }}" method="POST">
            <input type="hidden" name="token" value="{{ $token }}">
            
            <input class="register" type="email" name="email" placeholder="Email">
            <br>
            <input class="register" type="password" name="password" placeholder="Password">
            <br>
            <input class="register" type="password" name="password_confirmation" placeholder="Confirm Password">
            <p style="color:red; font-size: 15px">Password must be a minimum of 6 characters</p>
            <br>
            <!--<input class="button greybrown2" type="submit" value="Reset Password">-->
            <button class="button greybrown2" type="submit" value="Reset Password" style="margin: 0 auto">Submit</button>
        </form>
    </div>
    
    <div class="col-md-3 basicFontStyle">
        <br>
    </div>
</div>

@endsection