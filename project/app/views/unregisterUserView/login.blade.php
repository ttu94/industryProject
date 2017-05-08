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
    <div class="row">
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
                    @if($errors->any())
                        <div class="alert alert-error">
                            <a href="#" class="close" data-dimiss="alert"></a>
                            {{ implode('',$errors->all('<p class="error" style="color:red">:message</p>')) }}
                        </div>
                    @endif
                    <br>
                    <input class="login" type="text" placeholder="Email" name="email" width="50px">
                    <br>
                    <input class="login" type="password" placeholder="Password" name="password">
                    <br>
                    <input class="raleway" type="checkbox" checked="checked"> Remember me
                    
                    
                    <button>Sign In</button>
                    <br>
                    <a href="#">Forget Password?</a>
                    <br><br>
                    <a href="adminLogin">Admin Login</a>
                    <!--DUMMY LOG IN BUTTON-->
                </div>
            {{ Form::close() }}
            <a href="userProfilePage"><button>dummy</button></a>
        </div>

    </div>

</div>

@endsection
