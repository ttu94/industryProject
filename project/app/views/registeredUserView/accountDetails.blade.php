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
        <div class="personalDetail">
            <br>
            <h3>&nbsp;Personal Details</h3>
            <a class="basicFontStyle" href="#" style="float:right;color:#67AB9F">Edit Details</a>
            <br>
        </div>
        <hr>     
        
        <div class="personalInfo basicFontStyle">
            <div class="col-md-1">
                <p><strong>Name:</strong></p>
                <br>
                <p><strong>Age:</strong></p>
                <br>
                <p><strong>Gender:</strong></p>
                <br>
                <p><strong>Country:</strong></p>
                <br>
                <p><strong>Email :</strong></p>
                <br>
                <a href="#" style="color:#67AB9F">Change Password</a>
                <br>
            </div>
            <div class="col-md-11">
                <p>{{$user->firstName}} {{$user->lastName}} </p>
                <br>
                <p>{{$user->age}} </p>
                <br>
                <p>{{$user->gender}} </p>
                <br>
                <p>{{$user->country}}</p>
                <br>
                <p>{{$user->email}} </p>
                <br><br><br><br>
            </div>
        </div>
        
        <!--Other detail header bar-->
        <div class="personalDetail">
            <br>
            <h3>&nbsp;Other Details</h3>
            <a class="basicFontStyle" href="#" style="float:right;color:#67AB9F">Edit Details</a>
            <br>
        </div>
        <hr> 
        
        <div class="col-md-12">
            <div class="personalInfo basicFontStyle">
                <p><strong>I am:</strong></p>
                 <input type="radio" checked>&nbsp;&nbsp;a {{$user->usertype}}
                <br><br>
                <p><strong>Injurt date: </strong>{{$user->injuryDate}}</p>.
                <br>
                <p><strong>Were you taking treatment?</strong></p>
                <input type="radio" checked>&nbsp;&nbsp;{{$user->treatment}}
                <br><br>
                <p><strong>If so, what type of treatment?</strong></p>
                <p>{{$user->yesTreat}}&nbsp;</p>

                <p><strong>Were you interested in clinical trials?</strong></p>
                <input type="radio" checked>&nbsp;&nbsp;{{$user->clinicalTrial}}
                <br><br>
                <p><strong>Were you interested in physiotherapy?</strong></p>
                <input type="radio" checked>&nbsp;&nbsp;{{$user->physioTrial}}
                <br><br>
                <p><strong>Were you taking treatment?</strong></p>
                <input type="radio" checked>&nbsp;&nbsp;{{$user->treatment}}
                <br><br>
                <p><strong>Did you know anyone suffering from a spinal cord injury?</strong></p>
                <input type="radio" checked>&nbsp;&nbsp;{{$user->onBehalf}}
                <br><br>
            </div>
        </div>
</div>

           
    
@endsection