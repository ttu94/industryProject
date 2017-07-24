@extends('layouts.adminMaster')

@section('title')
	Admin Homepage
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
   <h2>ADMIN HOMEPAGE</h2>
@endsection

@section('content')
<div class="container-fluid">
    <br>
    <div style="width:80%; margin: 0 auto">
        <!--Map widget-->
        <script type="text/javascript" id="clustrmaps" src="//cdn.clustrmaps.com/map_v2.js?cl=080808&w=a&t=t&d=t7Ne12ZQ9RbTOqBlI5Lc69T8egnJwx0i5PU98EvOLXM&co=ffffff&cmo=ffe605&cmn=ff0000&ct=808080"></script> 
    </div>
    
    <div class="col-md-12 basicFontStyle">
        <a target="_blank" href="phpliteadmin.php">Database Management</a>
        <br>
        <!--<a href="admin_quiz_editor">Admin Quiz Editor</a>-->
        <a href={{ route("admin_quiz_editor", array("id" => Auth::user()->id)) }}>Thuans link</a>
        <p>Number of Visitors: 2</p>
        <a target="_blank" href="https://mail.google.com/mail/u/0/#inbox">Email</a>
    </div>
</div>

@endsection
