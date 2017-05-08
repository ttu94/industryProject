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
                <br>
                <input class="login" type="text" placeholder="Email" name="email" required width="50px">
                <br>
                <input class="login" type="password" placeholder="Password" name="password" required>
                <br>
                <input class="raleway" type="checkbox" checked="checked"> Remember me
                
                
                <a href=""><button>Sign In</button></a>
                <br>
                <a href="#">Forget Password?</a>
                <br><br>
                <a href="adminLogin">Admin Login</a>
                <!--DUMMY LOG IN BUTTON-->
                <a href="signIn"><button>dummy</button></a>
            </div>
            {{ Form::close() }}
        </div>

    </div>

</div>

@endsection
