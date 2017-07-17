@extends('layouts.adminMaster')

@section('title')
	Admin Quiz Editor
@endsection

@section('pageTitle')
    <!--NAME OF THIRD HEADER GOES HERE-->
   <h2>Admin Quiz Editor</h2>
@endsection

@section('content')
<script>
    // var db = window.openDatabase('/industry_project/project/app/database/production.sqlite', '1.0', 'This DB', 200000);
    // db.transaction(function (tx) {
    //     if (db){
    //         torun();
    //         console.log(tx.executeSql('SELECT COUNT(*) FROM users'));
    //     }
    //     //console.log(tx.executeSql('SELECT * FROM users WHERE id = 2'));
    // });
    // function torun(){
    //     db.transaction(function (tx){
    //         tx.executeSql('SELECT * FROM users', [], function (tx, results) {
    //         console.log('torun or not');
    //           var len = results.rows.length;
    //           console.log('Number of row: ' + len);
    //         });
    //     });
    // }
    
    
    // var questionNumber = 1;
    // window.onload = function(){
    //     while(questionNumber <= 20){
    //         addFunc();
    //     }
    // }
    // function addFunc(){
   	// 	  var questionlistTable = document.getElementById("questionlist");
    //       questionlistTable.innerHTML += '<option>' + 'option ' + questionNumber + '</option>';
    //       questionNumber += 1;
    //     }
        
        
</script>

<div class="container-fluid">
    <br>
    <div class="col-md-12 basicFontStyle">

         <!--<form action="{{ action('UserController@UpdateQuestion') }}" method="POST">-->
        {{ Form::open(array('route' => 'update_question')) }}
            <select size="15" name="modQuestions" id="questionlist">
                @if($moduleTestDB)
                    @foreach($moduleTestDB as $moduleTestDB)
                        <option value="{{ $moduleTestDB->id }}">{{ $moduleTestDB->question }}</option>
                    @endforeach
                @else
                    <option disable selected>no ModuleTest Quizes</option>
                @endif
            </select>
            
            <button class="button redbrown" type="submit" style="float:right; width:50%">Add Question</button> 
        <!--</form>-->
        {{ Form::close() }}
        <!--<a href=""> ADD Question</a>-->
    </div>
</div>

@endsection
