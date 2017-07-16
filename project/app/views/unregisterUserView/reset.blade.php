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
        @if (Session::has('error'))
          {{ trans(Session::get('reason')) }}
        @endif
         
        <form action="{{ action('RemindersController@postReset') }}" method="POST">
            <input type="hidden" name="token" value="{{ $token }}">
            
            <input class="register" type="email" name="email" placeholder="Email">
            <br>
            <input class="register" type="password" name="password" placeholder="Password">
            <br>
            <input class="register" type="password" name="password_confirmation" placeholder="Confirm Password">
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