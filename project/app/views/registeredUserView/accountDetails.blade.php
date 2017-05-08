@extends('layouts.masterLogin')

@section('title')
    Account Details
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
   <h2>Account Details</h2>
@endsection

@section('content')
<div class="container-fluid"> 
    <br>
    <div class="col-md-12">
        
        <div class="personalDetail">
            <br>
            <h3>&nbsp;Personal Details</h3>
            <a class="basicFontStyle" href="#" style="float:right;color:#67AB9F">Edit Details</a>
            <br>
        </div>
        <hr>     
        
        <div class="personalInfo">
            <br>
            <p class="basicFontStyle">Name: John Smith </p>
            <br>
            <p class="basicFontStyle">Age: 21 </p>
            <br>
            <p class="basicFontStyle">Gender: Other </p>
            <br>
            <p class="basicFontStyle">Email: johnsmith@test.com </p>
            <br>
            <a class="basicFontStyle" href="#" style="color:#67AB9F">Change Password</a>
        </div>
        
        <div class="personalDetail">
            <br><br>
            <h3>&nbsp;Other Details</h3>
            <a class="basicFontStyle" href="#" style="float:right;color:#67AB9F">Edit Details</a>
            <br>
        </div>
        <hr>  
        

    </div>

</div>

           
    
@endsection