@extends('layouts.unregisteredMaster')

@section('title')
	Admin Login
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
   <h2>Admin Login</h2>
@endsection

@section('content')
<div class="container-fluid">
    <br>
    <!--admin login then routed to admin dashboard-->
    <div class="col-md-12">
        <br><br>
        {{ Form::open(array('url' => secure_url('admin/login'))) }}
            <div class ="loginBlock">
                <h1 class="raleway">Admin Login</h1>
                <br>
                @if(Session::has('invalid'))
                    <div>
                         <p class="basicFontStyle" style="color:red">{{ Session::get('invalid') }}</p>
                    </div>
                @endif
                <input class="login" style="font-size:18px" type="text" placeholder="Email" name="email" width="50px">
                <br>
                <input class="login" style="font-size:18px" type="password" placeholder="Password" name="password">
                <br>
                <br>
                <button class="button greenbluedark">Sign In</button>
            </div>
        {{ Form::close() }}
        <!--<a href="adminHomePage"><button class="button greenbluedark">Dummy</button></a>-->
    </div>
</div>

@endsection
