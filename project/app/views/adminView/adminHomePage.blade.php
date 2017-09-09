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
    <div style="width:70%; margin: 0 auto">
        <p class="message">See where your users are using the site from around the world!</p>
        <!--Map widget-->
        <script type="text/javascript" id="clustrmaps" src="//cdn.clustrmaps.com/map_v2.js?cl=7790a8&w=a&t=t&d=l4_SQF59n1LMpAYnynWf-2F4_dHGv01wIKqrn-o3LQA&co=efefef&cmo=ad00ff&cmn=ffd600&ct=000000"></script>
    </div>
    <br>
    <div class="col-md-6 basicFontStyle" style="text-align: right">
        <p>Access the database by clicking the following link: <a target="_blank" href="phpliteadmin.php">Database</a></p>
        <p>Access the quiz editor: <a href={{ route("admin_quiz_editor", array("id" => Auth::user()->id)) }}>Editor</a></p>
        <p>Access the feedback and enquiries inbox in the Admin email: <a target="_blank" href="https://accounts.google.com/AccountChooser?continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F%3Fauthuser%3Dspinalcord%40gmail.com&service=mail&Email=sip.cjcnscr@gmail.com">Email</a></p>
    </div>
    <div class="col-md-6 basicFontStyle">
        <p>Number of registered users: <strong>{{$numberUsers}}</strong></p>
        <p>Number of deactivated users: <strong>{{$deativatedUsers}}</strong></p>
        <p>Number of users eligble for clinical trials: <strong>{{$eligibleUsers}}</strong></p>
    </div>
</div>

@endsection
