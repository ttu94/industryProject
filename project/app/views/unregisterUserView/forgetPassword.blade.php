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
        <br>
        <!--Password Recovery-->
        @if(Session::has('success'))
        <div class="alert alert-success alert-dismissable fade in"  style="background-color: #DBEDEA; border: none">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <h2 style="text-align:center">{{ Session::get('success') }}</h2>
        </div>
        @endif
        @if($errors->any())
        <div class="alert alert-danger alert-dismissable fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            {{ implode('',$errors->all('<h2 class="error" style="text-align:center">:message</h2>')) }}
        </div>
        @endif
        
        <p style="text-align: justify;line-height:40px">Please enter your email address. <br>An email will be sent to you shortly with a <u>new temporary password</u>.</p>
        <div class="forgetPasswordForm">
            <form action="{{ action('RemindersController@postRemind') }}" method="POST">
                <input class="register" style="width: 100%" type="text" name="email" placeholder="Email address">
                <br>
                <div style="text-align: center">
                    <button class="greenbluemedium" type="submit" vaule="Send Reminder" style="width: 250px">Request Password</button>
                    <br><br>
                    <p style="text-align: justify;line-height:40px">Please follow the prompts in the email.
                    <br> If you have not received the email, check your <u>Spam/Junk folder</u>. 
                    <br> If you still haven't received the email, request another temporary password.</p>
                </div>
            </form>
        </div>
    </div>
    
    <div class="col-md-3 basicFontStyle">
        <br>
    </div>
</div>

@endsection
