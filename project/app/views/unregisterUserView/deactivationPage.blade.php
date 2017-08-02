@extends('layouts.unregisteredMaster')

@section('title')
    Account Deactivated
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
    <!--THIS ALSO NEEDS TO BE TAKEN FROM DB-->
   <h2 style="color:white">Account Deactivated</h2>
@endsection


@section('content')
<div class="container-fluid basicFontStyle">
    <!--Script disables back button-->
    <script>
(function (global) { 

    if(typeof (global) === "undefined") {
        throw new Error("window is undefined");
    }

    var _hash = "!";
    var noBackPlease = function () {
        global.location.href += "#";

        // making sure we have the fruit available for juice (^__^)
        global.setTimeout(function () {
            global.location.href += "!";
        }, 50);
    };

    global.onhashchange = function () {
        if (global.location.hash !== _hash) {
            global.location.hash = _hash;
        }
    };

    global.onload = function () {            
        noBackPlease();

        // disables backspace on page except on input fields and textarea..
        document.body.onkeydown = function (e) {
            var elm = e.target.nodeName.toLowerCase();
            if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea')) {
                e.preventDefault();
            }
            // stopping event bubbling up the DOM tree..
            e.stopPropagation();
        };          
    }

})(window);</script>

    <br><br>
    <p style="text-align:center">
        You have decided to deactivate your account.<br>
        We're sad to see you go :(<br>
        Just know that everything will be waiting for you exactly as you left it :)<br>
        <br>
        To reactivate your account, just <a href="login" style="color: #195DA3"><u>Login</u></a> normally and confirm that you wish to reactivate.
        <br><br>
        We hope to see you again soon!
    </p>

</div>
@endsection
