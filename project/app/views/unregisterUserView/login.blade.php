@extends('layouts.unregisteredMaster')

@section('title')
	Login
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
   <h2>Login</h2>
@endsection

@section('content')
<div class="container-fluid">
    <br>
    <!--<div class="row">-->
        <!--Linking to user register page-->
        <div class="col-md-4">
            <br><br><br><br>
            <div id="noLogin">
                <h3 class="raleway">Don't have an account?<br>Register now</h2>
                <br>
                <a href="register"><button>Create Account</button></a>
            </div>
        </div>
        
        <!--Vertical line break between divs-->
        <!--<div class="verticalLine" style="float:right" ></div>-->
        
        <!--user login then routed to user's dashboard-->
        <div class="col-md-8">
            <br><br>
            {{ Form::open(array('url' => secure_url('user/login'))) }}
                <div class ="loginBlock">
                    <h1 class="raleway">Registered User</h1>
                    <br>
                    @if($errors->any())
                        <div>
                            <a href="#" class="close" data-dimiss="alert"></a>
                            {{ implode('',$errors->all('<p class="basicFontStyle error" style="color:red">:message</p>')) }}
                            <br>
                        </div>
                    @endif
                    <input class="login" type="text" placeholder="Email" name="email" width="50px">
                    <br>
                    <input class="login" type="password" placeholder="Password" name="password">
                    <br>
                    <!--<input class="raleway" id="remember" name="remember" type="checkbox"> Remember me-->
                    <!--<span class="login-checkbox">-->
                    <!--    <input id="remember" name="remember" type="checkbox" class="field login-checkbox" />-->
                    <!--    <label class="choice" for="remember">Remember me</label>-->
                    <!--</span>-->
                    
                    <button>Sign In</button>
                    <br>
                    <a href="#" style="color:#67AB9F">Forget Password?</a>
                    <br><br>
                    <a href="adminLogin" style="color:#67AB9F">Admin Login</a>
                </div>
            {{ Form::close() }}
        </div>

    <!--</div>-->

</div>

@endsection
