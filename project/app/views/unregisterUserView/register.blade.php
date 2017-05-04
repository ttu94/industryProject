@extends('layouts.unregisteredMaster')

@section('title')
	Register
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
    <h2>Register</h2>
@endsection

@section('content')
<div class="container-fluid basicFontStyle">
    <div class="col-md-12">
        <!--<div>-->
            <h2>Personal Details</h2>
            <hr>
            <div style="column-count:2">
                <input class="register" type="text" name="firstName" placeholder="First name *" required>
                <input class="register" type="text" name="lastName" placeholder="Last name *" required>
            </div>
            <!--<br>-->
            <div class="ageGender">  <!--class not used yet-->
                <input class="age" type="number" name="age" placeholder="Age *" required>
                
                <!--gender selection box-->
                <div class="linearRadio">
                    <p class="gender">Gender<font color="red">*</font></p>
                    <input style="margin-left:0px" type="radio" name="gender" value="male"> Male
                    <input type="radio" name="gender" value="female"> Female
                    <input type="radio" name="gender" value="other"> Other
                </div>
            </div>

            <input class="email" type="email" name="email" placeholder="Email *" required>
            <br>
            <input class="email" type="country" name="country" placeholder="Country of Residence *" required>
            
            <div style="column-count:2">
                <input class="register" type="password" name="password" placeholder="Password *" required>
                <input class="register" type="password" name="password2" placeholder="Confirm Password*" required>
            </div>
            
            <h2>Other Details</h2>
            <hr>
            <p>I am: <font color="red">*</font></p>
            <div class="oUsertype">
                <input type="radio" name="usertype" value="patient" checked> a patient with a spinal cord injury (SCI)
                <br>
                <input type="radio" name="usertype" value="carer"> a family member/carer of a spinal cord injury (SCI) patient
                <br>
                <input type="radio" name="usertype" value="student"> a student
                <br>
                <input type="radio" name="usertype"> other
                <input class="other" style="margin-left:60px;max-width:475px;width:100%;" type="text" name="other" placeholder="Please state other">  
            </div>
            
            <!--DROPS DOWN IF USER SELECTS PATIENT RADIO-->
            <div class="otherDetailBox box">
                <p>Please answer the following questions if you are a <u>patient:</u></p>
                <hr>
                <p>When did your injury occur?</p>
                <!--<input type="text" id="datepicker">-->
                <input type="date" name="injuryDate" style="text-align:center">
                <div class="linearRadio" name="treatment">
                    <p><br>Are you taking any treatment for it?</p>
                    <input style="margin-left:0px" type="radio" name="treatment" value="yes"> Yes
                    <input type="radio" name="treatment" value="no"> No
                </div>
                <input class="treated" type="text" name="yesTreat" placeholder="What is the treatment?">
                
                <div class="linearRadio" name="clinicalTrial">
                    <p><br>Will you be interested in participating in the clinical trial?</p>
                    <input style="margin-left:0px" type="radio" name="clinicalTrial" value="yes"> Yes
                    <input type="radio" name="clinicalTrial" value="no"> No
                </div>
                
                <div class="linearRadio" name="physioTrial">
                    <p><br>Will you be interested in participating in the physiotherapy trial?</p>
                    <input style="margin-left:0px" type="radio" name="physioTrial" value="yes"> Yes
                    <input type="radio" name="physioTrial" value="no"> No
                </div>
            </div>
            
            <!--DROPS DOWN IF USER IS NOT A PATIENT OF SCI-->
            <div class="otherDetailBox boxtwo">
                <p>Please answer the following question if you are <u>not a patient:</u></p>
                <hr>
                <div class="linearRadio" name="onBehalf">
                    <p>Do you know anyone who is suffering from spinal cord injury (SCI)?</p>
                    <input style="margin-left:0px" type="radio" name="onBehalf" value="yes"> Yes
                    <input type="radio" name="onBehalf" value="no"> No
                </div>
            </div>
            <div style="margin-top:20px;text-align:center"><button type="submit" value="">Create Account</button></div>
    </div>
</div>

@endsection
