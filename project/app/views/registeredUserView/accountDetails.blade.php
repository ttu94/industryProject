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
            <div class="alert alert-success alert-dismissable fade in"  style="background-color: #DBEDEA; border: none">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <h2 style="text-align:center">{{ Session::get('success') }}</h2>
            </div>
        @endif
        @if(Session::has('update_success'))
            <div class="alert alert-success alert-dismissable fade in"  style="background-color: #DBEDEA; border: none">
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
                  <div class="faq_question" style="background-color:#F8F8F8;color:#67AB9F;padding-left:20px; box-shadow: none">Change Password</div>
                       <div class="faq_answer_container" style="background-color:#F8F8F8">
                          <div class="faq_answer"><br>
                              {{ Form::model($user, array('method' => 'PUT', 'route' => array('update_password', Auth::user()->id)))}}
                                  <!--<div style="column-count:2">-->
                                    <div class="col-md-12">
                                        <input class="register" style="width: 50%" type="password" name="password" placeholder="Current Password*">
                                        <br><br><br><br>
                                        <input class="register" style="width: 50%" type="password" name="new_password" placeholder="New Password*">
                                        <br><br><br>
                                        <input class="register" style="width: 50%" type="password" name="confirm_password" placeholder="Confirm New Password*">
                                    </div>
                                    <br>
                                    <div style="margin-top:20px; margin-left: 15px">
                                      <button class ="button greenbluedark2" type="submit">Change password</button>
                                    </div>
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

           
    
@endsection