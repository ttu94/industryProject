@extends('layouts.unregisteredMaster')

@section('title')
    Logged Out
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
    <!--THIS ALSO NEEDS TO BE TAKEN FROM DB-->
   <h2 style="color:white">Spinal Cord Injury Rehabilitation Log Out</h2>
@endsection


@section('content')
<div class="container-fluid basicFontStyle">
    <br>
    <p style="font-size:20px">You are now logged out of your account.<br><br>
       You can log back into your account <a href="login" style="color: #88ABA5"><u>here</u></a> 
       or go back to the <a href="home" style="color: #88ABA5"><u>Homepage</u></a>.
    </p>

</div>
@endsection
