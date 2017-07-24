@extends('layouts.unregisteredMaster')

@section('title')
	Admin Login
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
   <h4>Admin Login</h4>
@endsection

@section('content')
<div class="container-fluid">
    <br>
    <!--admin login then routed to admin dashboard-->
    <div class="col-md-3">
        <br>
    </div>
    <div class="col-md-6">
        <br><br>
        {{ Form::open(array('url' => secure_url('admin/login'))) }}
            <h1 class="raleway" style="text-align:center">Admin User</h1>
            <br>
        @if(Session::has('invalid'))
            <div>
                 <p class="basicFontStyle" style="color:red">{{ Session::get('invalid') }}</p>
            </div>
        @endif
        <input class="loginA" style="font-size:18px;" type="text" placeholder="Email" name="email" width="25px">
        <br>
        <input class="loginA" style="font-size:18px;" type="password" placeholder="Password" name="password">
        <br>
        <br>
        <div style="text-align:center">
            <button class="button darkgrey2">Sign In</button>
        </div>
        

        {{ Form::close() }}
        <!--<a href="adminHomePage"><button class="button greenbluedark">Dummy</button></a>-->
    </div>
    <div class="col-md-3">
        <br>
    </div>
</div>

@endsection
