@extends('layouts.masterLogin')

@section('title')
    {{--Module names needs to be taken out of database--}}
    {{ $quizNo }} Quiz Results
@endsection

@section('pageTitle')
   <h4>{{ $quizNo }} Quiz Results</h4>
@endsection

@section('content')
<div class="container-fluid"> 
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
    <div class="col-md-12">
        <a href={{ route("module_quiz_info", array("id" => Auth::user()->id, "quizNo" => $quizNo)) }}><button class="darkgrey2" style="float:left">Retake Quiz</button></a>
        <a href={{ route("overall_results", array("id" => Auth::user()->id)) }}><button class="darkgrey2" style="float:right">See All Results</button></a>
    </div>
    
    <?php 
        $count = 1;
    ?>
    <div class="col-md-12">
        <h1>Your Results: <?php echo $correct . "/" . ($index-4) ?></h1>
        <!--requires if user pass statement here-->
        <?php 
            
        //   echo (($index-4)*0.8));
        //   echo $correct;
            if($correct >= (($index-4)*0.8)){
                ?>
                <h2>Congratulations, you've passed <span style="color:#B70014">{{$quizNo}}</span>!</h2> 
                <h2>Click <a href="#" onclick="HTMLtoPDF()">here</a> to download your certificate</h2>
                <?php
            }
        ?>
    
        {{ Form::open() }}
            @foreach($userAnswer as $k=>$s)
                <h2><span style="color:#B70014">Question {{ $count }}:</span>
                <!--Question in variable k-->
                {{ $k }}
                    @if($subA[$count-1] == 'Right')
                        <span class="glyphicon glyphicon-ok" style="color:#9FD26C; font-size: 35px"></span>
                    @else
                        <span class="glyphicon glyphicon-remove" style="color:#B70014; font-size: 35px"></span>
                    @endif
                </h2>
                <p class="basicFontStyle">
                @foreach($moduleAnswersDB as $multiChoice)
                    @if($multiChoice->moduleTest_id == $usedID[$count-1])
                        @if($s == $multiChoice->answer)
                            {{ Form::radio($usedID[$count-1], $multiChoice->answer, true, array('disabled'))}}
                        @else
                            {{ Form::radio($usedID[$count-1], $multiChoice->answer, false, array('disabled'))}}
                        @endif
                        {{$multiChoice->answer}} <br>
                    @endif
                @endforeach
                </p>
                <?php $count++; ?>
            @endforeach
        {{ Form::close() }}
        
    </div>
    
	<div id="HTMLtoPDF" style="display:none">

	<h2>HTML to PDF</h2>

	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	</div>
</div>

@endsection