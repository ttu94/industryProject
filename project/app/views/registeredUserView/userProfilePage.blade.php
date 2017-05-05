@extends('layouts.masterLogin')

@section('title')
    {{-- USER NAME WILL NEED TO BE TAKEN OUT OF DB --}}
	Welcome John Smith!
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
    <!--THIS ALSO NEEDS TO BE TAKEN FROM DB-->
   <h2>Welcome, John Smith</h2>
@endsection

@section('content')
<div class="container-fluid basicFontStyle">
    <div class="col-md-12">
        <div class="summaryBox">
            <div style="border-width:5px; border-style:solid; vertical-align:middle">
                <h2 class="middleAlign" style="padding-top:30px">Summary of tests done</h2>
                <br>
                <p class="middleAlign">Last test completed:</p>
                <!--The last test link should be here-->
                <br>
                <p class="middleAlign">Modules completed</p>
                <!--Should have the number of modules completed here-->
                
            </div>
        </div>
        <div style="margin:50px;float:left">
            <img style="width:100%;height:200px;">
            text under here
        </div>
        <div id="scroll">
            <img src="images/griffith_logo.png">
            <img src="images/griffith_logo.png">
            <img src="images/griffith_logo.png">
            <img src="images/griffith_logo.png">
            <img src="images/griffith_logo.png">
        
        </div>
    </div>
</div>
@endsection