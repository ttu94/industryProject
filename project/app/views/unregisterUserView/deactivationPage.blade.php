@extends('layouts.unregisteredMaster')

@section('title')
    Account Deactivated
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
    <!--THIS ALSO NEEDS TO BE TAKEN FROM DB-->
   <h2 style="color:white">Account Deactivated</h2>
@endsection


@section('content')
<div class="container-fluid basicFontStyle">
    <br><br>
    <p style="text-align:center">
        You have decided to deavtivate your account.<br>
        We're sad to see you go :(<br>
        Just know that everything will be waiting for you exactly as you left it :)<br>
        <br>
        To reactivate your account, just <a href="login" style="color: #195DA3"><u>Login</u></a> normally and confirm that you wish to reactive.
        <br><br>
        We hope to see you again soon!
    </p>

</div>
@endsection
