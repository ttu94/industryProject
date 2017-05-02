@extends('layouts.unregisteredMaster')

@section('title')
	Register
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
    <h2>Register</h2>
@endsection

@section('content')
<div class="container-fluid">
    
    <div class="col-md-12">
        <!--<div>-->
            <h2>Personal Details</h2>
            <input class="register" type="text" name="firstname" placeholder="First name *" required>
            <input class="register" type="text" name="lastname" placeholder="Last name *" required>
            <br>
            <div class="ageGender">
                <input class="age" type="number" name="age" placeholder="Age *" required>
                <!--gender selection box-->
                <div class="genderSelection basicFontStyle">
                    <p class="gender">Gender<font color="red">*</font></p>
                    <input type="radio" name="gender" value="male" checked> Male
                    <input type="radio" name="gender" value="female" checked> Female
                    <input type="radio" name="gender" value="other" checked> Other
                </div>
            </div>
            

            
            <input class="email" type="email" name="email" placeholder="Email *" required><br>
            <input class="register" type="password" name="password" placeholder="Password *" required>
            <input class="register" type="password" name="password2" placeholder="Confirm Password*" required>
            
            <h2>Other Details</h2>
            
            <p>I am: <font color="red">*</font></p>
            <input type="radio" name="usertype" value="patient" checked> a patient with a spinal cord injury (SCI)
            <br>
            <input type="radio" name="usertype" value="carer" checked> a family member/carer of a spinal cord injury (SCI) patient
            <br>
            <input type="radio" name="usertype" value="student" checked> a student
            <br>
            <input type="radio" name="usertype" value="other" checked> other
            <br>
    </div>
</div>

@endsection
