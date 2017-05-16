@extends('layouts.unregisteredMaster')

@section('title')
    Logged Out
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
    <!--THIS ALSO NEEDS TO BE TAKEN FROM DB-->
   <h2>Logged Out</h2>
@endsection


@section('content')
<div class="container-fluid">

Use these as links. you might need thsee

<a href="login">Log back in</a>
<br>
<a href="home">back to ghomepage</a>
  
</div>
@endsection
