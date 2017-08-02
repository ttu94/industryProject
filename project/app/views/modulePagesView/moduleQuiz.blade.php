@extends('layouts.masterLogin')

@section('title')
    {{--Module names needs to be taken out of database--}}
    {{$quizNo}} Quiz
@endsection

@section('pageTitle')
   <h4>{{$quizNo}} Quiz</h4>
@endsection

@section('content')
<div class="container-fluid"> 
    <!--Code to prevent users for pressing backspace and cheat on the quiz-->
    <input type="hidden" id="refreshed" value="no">
    <script type="text/javascript">
	onload=function(){
	var e=document.getElementById("refreshed");
	if(e.value=="no")e.value="yes";
	else{e.value="no";location.reload();}
	}
</script>
    <!--Anti cheat ends-->
    
    <br><br>
    <div class="progress">
        <div class="progress-bar progress-bar-striped active" id="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
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
            });
        });
    </script>
    
    <div class="col-md-12">
        <form action={{ route("quiz_results", array("id" => Auth::user()->id)) }}>
        
                {{ Form::model($user, array('method' => 'PUT', 'route' => array('quiz_results', Auth::user()->id)))}}
                <div id="tracklist">
                    <?php $count = 0; $submittedQuestions; shuffle($moduleTestDB); ?>
                    {{ Form::hidden('quizNo', $quizNo) }}
                    @foreach($moduleTestDB as $moduleTestDB)
                        <?php 
                            $count++;
                        ?>
                        @if($count <= 10)
                            <?php $subQuestions = $moduleTestDB->id; ?>
                            <h2><span style="color:#B70014">Question {{ $count }}:</span> {{ $moduleTestDB->question }}</h2>
                            {{ Form::hidden($subQuestions, 'nullified') }}
                            <p class="basicFontStyle">
                                @foreach($moduleAnswersDB as $multiChoice)
                                    @if($multiChoice->moduleTest_id === $moduleTestDB->id)
                                        {{ Form::radio($subQuestions, $multiChoice->answer)}}
                                        {{$multiChoice->answer}} <br>
                                    @endif
                                @endforeach
                            </p>
                            <br>
                        @endif
                    @endforeach
                    <div style="margin-top:20px;text-align:center"><button class="button darkgrey2" type="submit">Submit</button></div>
                </div>
                {{ Form::close() }}
        </form>
    </div> <!--Quiz container ends here -->

</div>

@endsection