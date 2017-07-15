@extends('layouts.unregisteredMaster')

@section('title')
	Forgotten Password Retrieval
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
   <h2>Need help with your password?</h2>
@endsection

@section('content')
<div class="container-fluid">
    <br><br>
    <div class="col-md-3 basicFontStyle">
        <br>
    </div>
    
    <div class="col-md-6 basicFontStyle">
        @if (Session::has('error'))
          {{ trans(Session::get('reason')) }}
        @endif
         
        {{ Form::open(array('route' => array('password.update', $token))) }}
         
          <p>{{ Form::label('email', 'Email') }}
          {{ Form::text('email') }}</p>
         
          <p>{{ Form::label('password', 'Password') }}
          {{ Form::text('password') }}</p>
         
          <p>{{ Form::label('password_confirmation', 'Password confirm') }}
          {{ Form::text('password_confirmation') }}</p>
         
          {{ Form::hidden('token', $token) }}
         
          <p>{{ Form::submit('Submit') }}</p>
         
        {{ Form::close() }}
    </div>
    
    <div class="col-md-3 basicFontStyle">
        <br>
    </div>
</div>

@endsection