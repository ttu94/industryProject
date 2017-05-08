@extends('layouts.masterLogin')

@section('title')
    {{-- USER NAME WILL NEED TO BE TAKEN OUT OF DB --}}
    
	Welcome
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
    <!--THIS ALSO NEEDS TO BE TAKEN FROM DB-->
   <h2>Welcome, </h2>
@endsection

@section('content')
<div class="container-fluid basicFontStyle">
    <div class="col-md-12">
        <table class="testborder" style="width:100%; margin: 50px 10px 0px 0px;">
            <tr>
                <td rowspan="2">
                    <div class="summaryBox" style="display:table">
                        <div class="" style="display: table-cell;vertical-align:middle">
                            <h2 class="middleAlign" style="padding-top:30px">Summary of tests done</h2>
                            <br>
                            <p class="middleAlign">Last test completed:</p>
                            <!--The last test link should be here-->
                            <br>
                            <p class="middleAlign">Modules completed</p>
                            <!--Should have the number of modules completed here-->
                        </div>
                    </div>
                </td>
                <td><img style="margin:auto;display:block; width: 500px; height: 500px"></td>
            </tr>
            <tr>
                <td style="text-align:center;">text under here</td>
            </tr>
        </table>
        <!--<div class="summaryBox">-->
        <!--    <div class="testborder" style="vertical-align:middle">-->
        <!--        <h2 class="middleAlign" style="padding-top:30px">Summary of tests done</h2>-->
        <!--        <br>-->
        <!--        <p class="middleAlign">Last test completed:</p>-->
                <!--The last test link should be here-->
        <!--        <br>-->
        <!--        <p class="middleAlign">Modules completed</p>-->
                <!--Should have the number of modules completed here-->
                
        <!--    </div>-->
        <!--</div>-->
        <!--<div class="testborder" style="width:100%: height:200px">-->
        <!--    <table>-->
        <!--        <tr>-->
        <!--            <td><img style="width: 500px; height: 500px"></td>-->
        <!--        </tr>-->
        <!--        <tr>-->
        <!--            <td style="text-align: center">-->
        <!--                text under here-->
        <!--            </td>-->
        <!--        </tr>-->
        <!--    </table>-->
        <!--</div>-->
        
        <div class="coverflow">
            <div class="cover"><img src="images/griffith_logo.png"></div>
            <div class="cover"><img src="images/griffith_logo.png"></div>
            <div class="cover"><img src="images/griffith_logo.png"></div>
            <div class="cover"><img src="images/griffith_logo.png"></div>
            <div class="cover"><img src="images/griffith_logo.png"></div>
        </div>
    </div>
</div>
@endsection