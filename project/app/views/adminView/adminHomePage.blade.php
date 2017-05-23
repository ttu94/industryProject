@extends('layouts.unregisteredMaster')

@section('title')
	Admin Homepage
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
   <h2>Admin Homepage</h2>
@endsection

@section('content')
<div class="container-fluid">
    <br>
    <div class="col-md-12 basicFontStyle">
        <a href="phpliteadmin.php">Database Management</a>
        <br>
        <p>Number of Visitors: 2</p>
    </div>
</div>

@endsection
