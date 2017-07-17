@extends('layouts.adminMaster')

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
        <a target="_blank" href="phpliteadmin.php">Database Management</a>
        <br>
        <!--<a href="admin_quiz_editor">Admin Quiz Editor</a>-->
        <a href={{ route("admin_quiz_editor", array("id" => Auth::user()->id)) }}>Thuans link</a>
        <p>Number of Visitors: 2</p>
    </div>
</div>

@endsection
