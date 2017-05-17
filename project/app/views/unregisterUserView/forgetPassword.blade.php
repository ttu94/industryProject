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
    <br>
    <div class="col-md-4 basicFontStyle">
        <br>
    </div>
    
    <div class="col-md-4 basicFontStyle">
        <p style="text-align: center">Enter your email address and we'll help create a new password for you.</p>
        <div class="forgetPasswordForm">
            <form action="/action_page.php" class="forgetForm">
                <input class="register" style="width: 100%" type="text" name="email" placeholder="Email address">
                <br>
                <div style="text-align: center">
                    <button class="greenbluedarker" type="submit">Next</button>
                    <p>By continuing, your current password will become invalid and a new one will be sent to your email.</p>
                </div>
            </form>            
        </div>
    </div>
    
    <div class="col-md-4 basicFontStyle">
        <br>
    </div>
</div>

@endsection
