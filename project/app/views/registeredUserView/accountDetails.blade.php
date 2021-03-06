@extends('layouts.masterLogin')

@section('title')
    Account Details
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
   <h2 style="color:white">Account Details</h2>
@endsection

@section('content')
<div class="container-fluid"> 
    <br>
    @if(Session::has('success'))
        <div class="alert alert-success alert-dismissable fade in"  style="background-color:#D5E1EE;border:none;border-radius:25px">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <h2 style="text-align:center">{{ Session::get('success') }}</h2>
        </div>
    @endif
    @if(Session::has('update_success'))
        <div class="alert alert-success alert-dismissable fade in"  style="background-color:#D5E1EE;border:none;border-radius:25px">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <h2 style="text-align:center">{{ Session::get('update_success') }}</h2>
        </div>
    @endif
    @if($errors->any())
        <div class="alert alert-danger alert-dismissable fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            {{ implode('',$errors->all('<h2 class="error" style="text-align:center">:message</h2>')) }}
        </div>
    @endif
    <div class="col-md-12 aDetails_area">
        <div class="personalDetail">
            <br>
            <h3>&nbsp;Personal Details</h3>
            <a class="basicFontStyle" href={{ route("update_details", array("id" => Auth::user()->id)) }} style="float:right;color:#195DA3">Edit Details</a>
            <br>
        </div>
        <hr>
        <div class="personalInfo basicFontStyle">
            <div class="col-md-1">
                <br>
                <p><strong>Name:</strong></p>
                <br>
                <p><strong>Age:</strong></p>
                <br>
                <p><strong>Gender:</strong></p>
                <br>
                <p><strong>Country:</strong></p>
                <br>
                <p><strong>Email :</strong></p>
            </div>
            <div class="col-md-11">
                <br>
                <p>{{$user->firstName}} {{$user->lastName}} </p>
                <br>
                <p>{{$user->age}} </p>
                <br>
                <p>{{$user->gender}} </p>
                <br>
                <p>{{$user->country}}</p>
                <br>
                <p>{{$user->email}} </p>
            </div>
                
            <!--CHANGE PASSWORD-->
            <div class="faq_container">
               <div class="faq">
                  <div class="faq_question" style="background-color:white;color:#195DA3;padding-left:20px; box-shadow: none">Change Password</div>
                  <div class="faq_answer_container" style="background-color:white">
                      <div class="faq_answer">
                        {{ Form::model($user, array('method' => 'PUT', 'route' => array('update_password', Auth::user()->id)))}}
                        <!--<div style="column-count:2">-->
                        <div class="col-md-12">
                            <input class="register" style="width: 50%;background-color:#EFEFEF" type="password" name="password" placeholder="Current Password*">
                            <br><br><br>
                            <input class="register" style="width: 50%;background-color:#EFEFEF" type="password" name="new_password" placeholder="New Password*">
                            <br><br><br>
                            <input class="register" style="width: 50%;background-color:#EFEFEF" type="password" name="confirm_password" placeholder="Confirm New Password*">
                            <br><br><br>
                        </div>
                        <div style="margin-top:20px; margin-left: 15px">
                            <button class ="button darkgrey" type="submit">Change password</button>
                        </div>
                        {{ Form::close() }}
                        <br>
                      </div>
                  </div>        
               </div>
            </div>
        </div>
    </div>
        
    <div class="col-md-12"><br></div>
        
    <div class="col-md-12 aDetails_area">
        <!--Other detail header bar-->
        <div class="personalDetail">
            <br>
            <h3>&nbsp;Other Details</h3>
            <br>
        </div>
        <hr>
        <div class="col-md-12">
            <div class="personalInfo basicFontStyle">
                <p><strong>I am:</strong>  a {{$user->usertype}}</p>
                <br>
                <p><strong>Injury date: </strong>{{$user->injuryDate}}</p>
                <br>
                <p><strong>Were you taking treatment?</strong>  {{$user->treatment}}</p>
                <br>
                <p><strong>If so, what type of treatment?</strong>  {{$user->yesTreat}}</p>
                <br>
                <p><strong>Were you interested in clinical trials?</strong>  {{$user->clinicalTrial}}</p>
                <br>
                <p><strong>Were you interested in physiotherapy?</strong>  {{$user->physioTrial}}</p>
                <br>
                <p><strong>Were you taking treatment?</strong>  {{$user->treatment}}</p>
                <br>
                <p><strong>Did you know anyone suffering from a spinal cord injury?</strong>  {{$user->onBehalf}}</p>
                <br>
            </div>
        </div>    
    </div>
</div>
@endsection