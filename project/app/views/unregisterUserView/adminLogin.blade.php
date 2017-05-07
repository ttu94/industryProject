@extends('layouts.unregisteredMaster')

@section('title')
	Admin
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
   <h2>Admin Login</h2>
@endsection

@section('content')
<div class="container-fluid">
    <br>
    <div class="row">
     
        <!--admin login, routed to admin home page-->
        <div class="col-md-8">
            <br><br>
            <div class ="loginBlock">
                <h1 class="raleway">Admin</h1>
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
                <a href="#">Admin Login</a>
                <!--DUMMY LOG IN BUTTON-->
                <a href="signIn"><button>dummy</button></a>
            </div>
        </div>

    </div>

</div>

@endsection
