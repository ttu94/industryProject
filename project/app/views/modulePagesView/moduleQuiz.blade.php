@extends('layouts.masterLogin')

@section('title')
    {{--Module names needs to be taken out of database--}}
    {{$quizNo}} Quiz
@endsection

@section('pageTitle')
   <h4>{{$quizNo}} Quiz</h4>
@endsection

@section('content')
<script>
    var questionNumber = 1;
    window.onload = function(){
        // while(questionNumber <= 10){
        //     addFunc();
        // }
    }
    // function addFunc(){
   	// 	  var tracklistTable = document.getElementById("tracklist");
    //       tracklistTable.innerHTML += '<div class="linearRadio basicFontStyle"><h2>Question ' + questionNumber + '</h2><h3>' + 'ADD_QUESTION_HERE' + '</h3>' + 'ADD_QUIZ' + '<br></div><br>';
    //       questionNumber += 1;
    //     }
</script>

<div class="container-fluid"> 
    <br><br>
    <div class="progress">
        <div class="progress-bar progress-bar-striped active" id="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
            progress
        </div>
    </div>
    <!--Script for progress bar-->
    <script>
    jQuery(function ($) {
    $('#tracklist').click(function () {
        var val = 10;
        var totalVal= 0;
        $('input:checked').each(function() {
        totalVal += val;
        });
        $('#progress-bar').css('width', totalVal + '%').text(totalVal + '%');
        })
    
    });
    </script>
    
    <div class="col-md-12">
        <form action={{ route("quiz_results", array("id" => Auth::user()->id)) }}>
        
                {{ Form::model($user, array('method' => 'PUT', 'route' => array('quiz_results', Auth::user()->id)))}}
                <div id="tracklist">
                    <?php $count = 0; $submittedQuestions; shuffle($moduleTestDB); ?>
                    @foreach($moduleTestDB as $moduleTestDB)
                        <?php 
                            $count++;
                        ?>
                        @if($count <= 10)
                        
                            <?php $subQuestions = $moduleTestDB->id; ?>
                            <h2>Question {{ $count }}</h2>
                            <h3>{{ $moduleTestDB->question }}</h3>
                            {{ Form::hidden($subQuestions, 'nullified') }}
                            @foreach($moduleAnswersDB as $multiChoice)
                                @if($multiChoice->moduleTest_id === $moduleTestDB->id)
                                    {{ Form::radio($subQuestions, $multiChoice->answer)}}
                                    {{$multiChoice->answer}} <br>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                    <div style="margin-top:20px;text-align:center"><button class="button darkgrey2" type="submit">Submit</button></div>
                </div>
                {{ Form::close() }}
        </form>
    </div> <!--Quiz container ends here -->

</div>

@endsection