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
        <div class="col-md-6">
            <br><br><br><br>
            <div id="noLogin">
                <h3 class="raleway">Don't have an account?<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRegister now</h2>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <a href="register"><button>Create Account</button></a>
            </div>
        </div>
        
        <!--Vertical line break between divs-->
        <div class="verticalLine"></div>
        
        <!--user login then routed to user's dashboard-->
        <div class="col-md-6">
            <!--<div>-->
                <h1 class="raleway">Registered User</h1>
                <br>
                <input class="login" type="text" placeholder="Email" name="email" required width="50px">
                <br>
                <input class="login" type="password" placeholder="Password" name="password" required>
                <br>
                <input class="raleway" type="checkbox" checked="checked"> Remember me &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                
                
                <a href=""><button>Sign In</button></a>
                <br>
                <a href="#">Forget Password?</a>
                <!--DUMMY LOG IN BUTTON-->
                <a href="signIn"><button>Dummy Log In button</button></a>
            <!--</div>-->
        </div>

    </div>

</div>

@endsection
