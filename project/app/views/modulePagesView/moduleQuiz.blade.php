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
      <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar"
      aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%; background-color:#F2D388; color: #595145">
        60% Complete
      </div>
    </div>
    <div class="col-md-12">
        <form action={{ route("quiz_results", array("id" => Auth::user()->id)) }}>
                {{ Form::model($user, array('method' => 'PUT', 'route' => array('quiz_results', Auth::user()->id)))}}
                <div id="tracklist">
                    <?php $count = 0; $submittedQuestions; shuffle($moduleTestDB); ?>
                    @foreach($moduleTestDB as $moduleTestDB)
                        <?php 
                            $count++;
                        ?>
                        @if($count <= 3)
                            <?php $subQuestions = $moduleTestDB->question;
                            ?>
                            
                            <h2>Question {{ $count }}</h2>
                            <h3>{{ $moduleTestDB->question }}</h3>
                            <?php 
                                foreach($moduleAnswersDB as $key=>$multiChoice){
                                    // echo $key;
                                    echo $multiChoice->id;
                                    // foreach($multiChoice as $k=>$test){
                                    //     echo $k."------";
                                    // }
                                }
                            ?>
                            
                            {{ Form::radio($subQuestions, 'Um, Sure Thing.')}} Um, Sure Thing.
                            {{ Form::radio($subQuestions, 'b')}} b
                            {{ Form::radio($subQuestions, 'c')}} c
                            {{ Form::radio($subQuestions, 'd')}} d
                        @endif
                    @endforeach
                    
                    <div style="margin-top:20px;text-align:center"><button class="button darkgrey2" type="submit">Submit</button></div>
                </div>
                {{ Form::close() }}
            <!--<div class="linearRadio basicFontStyle">-->
            <!--    <h2>Question 1:</h2>-->
            <!--    <h3> {Question insert here}</h3>-->
            <!--    {{ Form::radio('m1q1', 'true')}} a-->
            <!--    {{ Form::radio('m1q1', 'false')}} b-->
            <!--    {{ Form::radio('m1q1', 'false')}} c-->
            <!--    {{ Form::radio('m1q1', 'false')}} d-->
            <!--    <br>-->
            <!--</div>-->
            <!--<br>-->
            <!--<div class="linearRadio basicFontStyle">-->
            <!--    <h2>Question 2:</h2>-->
            <!--    <h3> {Question insert here}</h3>-->
            <!--    {{ Form::radio('m1q1', 'true')}} a-->
            <!--    {{ Form::radio('m1q1', 'false')}} b-->
            <!--    {{ Form::radio('m1q1', 'false')}} c-->
            <!--    {{ Form::radio('m1q1', 'false')}} d-->
            <!--    <br>-->
            <!--</div>-->
            <!--<br>-->
            <!--<div class="linearRadio basicFontStyle">-->
            <!--    <h2>Question 3:</h2>-->
            <!--    <h3> {Question insert here}</h3>-->
            <!--    {{ Form::radio('m1q1', 'true')}} a-->
            <!--    {{ Form::radio('m1q1', 'false')}} b-->
            <!--    {{ Form::radio('m1q1', 'false')}} c-->
            <!--    {{ Form::radio('m1q1', 'false')}} d-->
            <!--    <br>-->
            <!--</div>-->
            <!--<br>-->
            <!--<div class="linearRadio basicFontStyle">-->
            <!--    <h2>Question 4:</h2>-->
            <!--    <h3> {Question insert here}</h3>-->
            <!--    {{ Form::radio('m1q1', 'true')}} a-->
            <!--    {{ Form::radio('m1q1', 'false')}} b-->
            <!--    {{ Form::radio('m1q1', 'false')}} c-->
            <!--    {{ Form::radio('m1q1', 'false')}} d-->
            <!--    <br>-->
            <!--</div>-->
            <!--<br>-->
            <!--<div class="linearRadio basicFontStyle">-->
            <!--    <h2>Question 5:</h2>-->
            <!--    <h3> {Question insert here}</h3>-->
            <!--    {{ Form::radio('m1q1', 'true')}} a-->
            <!--    {{ Form::radio('m1q1', 'false')}} b-->
            <!--    {{ Form::radio('m1q1', 'false')}} c-->
            <!--    {{ Form::radio('m1q1', 'false')}} d-->
            <!--    <br>-->
            <!--</div>-->
            <!--<br>-->
            <!--<div class="linearRadio basicFontStyle">-->
            <!--    <h2>Question 6:</h2>-->
            <!--    <h3> {Question insert here}</h3>-->
            <!--    {{ Form::radio('m1q1', 'true')}} a-->
            <!--    {{ Form::radio('m1q1', 'false')}} b-->
            <!--    {{ Form::radio('m1q1', 'false')}} c-->
            <!--    {{ Form::radio('m1q1', 'false')}} d-->
            <!--    <br>-->
            <!--</div>-->
            <!--<br>-->
            <!--<div class="linearRadio basicFontStyle">-->
            <!--    <h2>Question 7:</h2>-->
            <!--    <h3> {Question insert here}</h3>-->
            <!--    {{ Form::radio('m1q1', 'true')}} a-->
            <!--    {{ Form::radio('m1q1', 'false')}} b-->
            <!--    {{ Form::radio('m1q1', 'false')}} c-->
            <!--    {{ Form::radio('m1q1', 'false')}} d-->
            <!--    <br>-->
            <!--</div>-->
            <!--<br>-->
            <!--<div class="linearRadio basicFontStyle">-->
            <!--    <h2>Question 8:</h2>-->
            <!--    <h3> {Question insert here}</h3>-->
            <!--    {{ Form::radio('m1q1', 'true')}} a-->
            <!--    {{ Form::radio('m1q1', 'false')}} b-->
            <!--    {{ Form::radio('m1q1', 'false')}} c-->
            <!--    {{ Form::radio('m1q1', 'false')}} d-->
            <!--    <br>-->
            <!--</div>-->
            <!--<br>-->
            <!--<div class="linearRadio basicFontStyle">-->
            <!--    <h2>Question 9:</h2>-->
            <!--    <h3> {Question insert here}</h3>-->
            <!--    {{ Form::radio('m1q1', 'true')}} a-->
            <!--    {{ Form::radio('m1q1', 'false')}} b-->
            <!--    {{ Form::radio('m1q1', 'false')}} c-->
            <!--    {{ Form::radio('m1q1', 'false')}} d-->
            <!--    <br>-->
            <!--</div>-->
            <!--<br>-->
            <!--<div class="linearRadio basicFontStyle">-->
            <!--    <h2>Question 10:</h2>-->
            <!--    <h3> {Question insert here}</h3>-->
            <!--    {{ Form::radio('m1q1', 'true')}} a-->
            <!--    {{ Form::radio('m1q1', 'false')}} b-->
            <!--    {{ Form::radio('m1q1', 'false')}} c-->
            <!--    {{ Form::radio('m1q1', 'false')}} d-->
            <!--    <br>-->
            <!--</div><br>-->
            <!--<button type="submit" class="greenbluelight2" style="float:right">Submit</button>-->
        </form>
    </div> <!--Quiz container ends here -->

</div>

@endsection