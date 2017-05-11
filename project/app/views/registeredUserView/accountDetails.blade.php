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
        @if(Session::has('success'))
            <div class="alert alert-success">
                <h2 style="text-align:center">{{ Session::get('success') }}</h2>
            </div>
        @endif
        @if(Session::has('update_success'))
            <div class="alert alert-success">
                <h2 style="text-align:center">{{ Session::get('update_success') }}</h2>
            </div>
        @endif
        <div class="personalDetail">
            <br>
            <h3>&nbsp;Personal Details</h3>
            <a class="basicFontStyle" href={{ route("update_details", array("id" => Auth::user()->id)) }} style="float:right;color:#67AB9F">Edit Details</a>
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
                <br>
            </div>
            
            <!--CHANGE PASSWORD-->
            <div class="faq_container">
               <div class="faq">
                  <div class="faq_question" style="background-color:#F5F5F5;color:#67AB9F;padding-left:20px">Change Password</div>
                       <div class="faq_answer_container" style="background-color:#F5F5F5">
                          <div class="faq_answer"><br>
                              {{ Form::model($user, array('method' => 'PUT', 'route' => array('update_password', Auth::user()->id)))}}
                                  @if($errors->any())
                                    <div class="alert alert-error">
                                        <a href="#" class="close" data-dimiss="alert"></a>
                                        {{ implode('',$errors->all('<p class="error" style="color:red">:message</p>')) }}
                                    </div>
                                  @endif
                                  <div style="column-count:2">
                                    <input class="register" type="password" name="password" placeholder="New Password*">
                                    <input class="register" type="password" name="password_confirmation" placeholder="Confirm New Password*">
                                  </div>
                                  <div style="margin-top:20px;text-align:center"><button type="submit">Change password</button></div>
                              {{ Form::close() }}
                          </div>
                       </div>        
                </div>
            </div>

             <br><br>
        </div>
        
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
                <p><strong>Injurt date: </strong>{{$user->injuryDate}}</p>
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

           
    
@endsection