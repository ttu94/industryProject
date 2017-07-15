@extends('layouts.unregisteredMaster')

@section('title')
	Forgotten Password Retrieval
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
   <h2>Need help with your password?</h2>
@endsection

@section('content')
<div class="container-fluid">
    <br><br>
    <div class="col-md-3 basicFontStyle">
        <br>
    </div>
    
    <div class="col-md-6 basicFontStyle">
        @if (Session::has('error'))
          {{ trans(Session::get('reason')) }}
        @elseif (Session::has('success'))
          An email with the password reset has been sent.
        @endif
        <p style="text-align: justify;line-height:40px">Please enter your email address. <br>An email will be sent to you shortly with a <u>new temporary password</u>.</p>
        <div class="forgetPasswordForm">/_page.php
            {{ Form::open(array('route' => 'password.request')) }}
                <input class="register" style="width: 100%" type="text" name="email" placeholder="Email address">
                <br>
                <div style="text-align: center">
                    <button class="greenbluemedium" type="submit" style="width: 250px">Request Password</button>
                    <br><br>
                    <p style="text-align: justify;line-height:40px">Please follow the prompts in the email.
                    <br> If you have not received the email, check your <u>Spam/Junk folder</u>. 
                    <br> If you still haven't received the email, request another temporary password.</p>
                </div>
            {{ Form::close() }}
        </div>
    </div>
    
    <div class="col-md-3 basicFontStyle">
        <br>
    </div>
</div>

@endsection
