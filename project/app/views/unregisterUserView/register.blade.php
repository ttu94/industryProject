@extends('layouts.unregisteredMaster')

@section('title')
	Register
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
    <h2>Register</h2>
@endsection

@section('content')
<div class="content_container">
    <div class="content_container">
        <hr>
    </div>
    <h2>Personal Details</h2>
    <hr>
    <input type="text" name="firstname" placeholder="First name *">
    <input type="text" name="lastname" placeholder="Last name *"><br>
    <input type="number" name="age" placeholder="Age *">

    <input type="radio" name="gender" value="male" checked> Male
    <input type="radio" name="gender" value="female" checked> Female
    <input type="radio" name="gender" value="other" checked> Other<br>
    
    <input type="email" name="email" placeholder="Email *"><br>
    <input type="password" name="password" placeholder="Password *">
    <input type="password" name="password2" placeholder="Confirm Password*">
    
    <h2>Other Details</h2>
    <hr>
    <p>I am: <font color="red">*</font></p>
    <input type="radio" name="usertype" value="patient" checked>a patient with a spinal cord injury (SCI)
    <input type="radio" name="usertype" value="carer" checked>a family member/carer of a spinal cord injury (SCI) patient
    <input type="radio" name="usertype" value="student" checked>a student
    <input type="radio" name="usertype" value="other" checked>other<br>
    
    
</div>

@endsection
